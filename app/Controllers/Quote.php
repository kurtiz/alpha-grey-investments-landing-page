<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Libraries\EmailLibrary;

class Quote extends ResourceController
{

    public $email;

    public function __construct()
    {
        $this->email = new EmailLibrary();
    }

    public function index()
    {
        if ($this->request->getMethod() == "post") {
            $appointmentDetails = [
                "name" => $this->request->getVar("fullname", FILTER_SANITIZE_STRING),
                "email" => $this->request->getVar("email", FILTER_SANITIZE_EMAIL),
                "subject" => $this->request->getVar("subject", FILTER_SANITIZE_STRING),
                "message" => $this->request->getVar("message", FILTER_SANITIZE_STRING)
            ];

            $to = [
                "alpha" => "info@alphagreyinvestments.com",
                "requester" => $appointmentDetails["email"],
                "cc" => "alphagreyinvestments@gmail.com"
            ];

            $subject = "Quotation Request!";

            $myFile = fopen(APPPATH."/Views/quote.html", "r") or die("Unable to open file!");
            $emailHtml = fread($myFile,filesize(APPPATH."/Views/quote.html"));

            $emailHtml = str_replace("{name}", $appointmentDetails["name"], $emailHtml);
            $emailHtml = str_replace("{email}", $appointmentDetails["email"], $emailHtml);
            $emailHtml = str_replace("{subject}", $appointmentDetails["subject"], $emailHtml);
            $emailHtml = str_replace("{message}", $appointmentDetails["message"], $emailHtml);
            fclose($myFile);

            $myFile = fopen(APPPATH."/Views/response.html", "r") or die("Unable to open file!");
            $responseHtml = fread($myFile,filesize(APPPATH."/Views/response.html"));

            $responseHtml = str_replace("{name}", $appointmentDetails["name"], $responseHtml);

            fclose($myFile);

            $message = [
                "request_msg" =>$emailHtml,
                "response_msg" => $responseHtml
            ];

            $this->email->setTo([$to["alpha"]]);
            $this->email->setname($appointmentDetails['name']);
            $this->email->setFrom($to["requester"]);
            $this->email->setCC([$to["cc"]]);
            $this->email->setSubject($subject);
            $this->email->setMessage($message["request_msg"]);
            $this->email->prepareHeaders();

            if ($this->email->send()) {
                $this->email->reset();

                $this->email->setTo([$to["requester"]]);
                $this->email->setName("Alpha Grey Investments");
                $this->email->setFrom($to["alpha"]);
                $this->email->setBCC([$to["cc"]]);
                $this->email->setSubject($subject);
                $this->email->setMessage($message["response_msg"]);
                $this->email->prepareHeaders();

                if ($this->email->send()) {
                    return $this->respond(["msg" => "success"]);
                }
            }
            return $this->respond(["msg" => $this->email->printDebugger()]);
        }
        return $this->respond(["msg" => "invalid request"]);
    }
}