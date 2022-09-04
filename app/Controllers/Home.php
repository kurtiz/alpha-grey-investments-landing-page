<?php 

namespace App\Controllers;

class Home extends BaseController {
	
	public function index() {
        session()->setTempdata("home", "active", "2");
        session()->set("page", "Home");
		return view('home');
	}
}
