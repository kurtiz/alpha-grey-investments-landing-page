<?php 

namespace App\Controllers;

use CodeIgniter\Controller;

class Projects extends Controller {
	
	public function index() {
        session()->setTempdata("projects", "active", "2");
        session()->set("page", "Projects");
		return view('projects');
	}
}
