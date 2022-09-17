<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Libraries\EmailLibrary;

class Appointment extends ResourceController
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
                "phone" => $this->request->getVar("phone", FILTER_SANITIZE_NUMBER_INT),
                "date" => $this->request->getVar("date", FILTER_SANITIZE_STRING),
                "subject" => $this->request->getVar("subject", FILTER_SANITIZE_STRING),
                "message" => $this->request->getVar("message", FILTER_SANITIZE_STRING)
            ];

            $to = [
                "alpha" => "info@alphagreyinvestments.com",
                "requester" => $appointmentDetails["email"],
                "cc" => "alphagreyinvestments@gmail.com"
            ];

            $subject = "APPOINTMENT BOOKING!";

            $myFile = fopen(APPPATH."/Views/appointment.html", "r") or die("Unable to open file!");
            $emailHtml = fread($myFile,filesize(APPPATH."/Views/appointment.html"));

            $emailHtml = str_replace("{name}", $appointmentDetails["name"], $emailHtml);
            $emailHtml = str_replace("{email}", $appointmentDetails["email"], $emailHtml);
            $emailHtml = str_replace("{phone}", $appointmentDetails["phone"], $emailHtml);
            $emailHtml = str_replace("{date}", $appointmentDetails["date"], $emailHtml);
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