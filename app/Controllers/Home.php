<?php 

namespace App\Controllers;


class Home extends BaseController {
	
	public function index():string {
        session()->setTempdata("home", "active", "2");
        session()->set("page", "Home");

		return view('home');
	}

}
