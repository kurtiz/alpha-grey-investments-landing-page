<?php 

namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends Controller {
	
	public function index() {
        session()->setTempdata("contact", "active", "2");
        session()->set("page", "Contact");
		return view('contact');
	}
}
