<?php

class Home extends Controller {

	// to run method, apply in URL
	// e.g.
	// http://localhost/mvc/public/home/index/jiroh/jiroh@email.com
	// http://localhost/mvc/public/home/create/jiroh/jiroh@email.com
	public function index($param = '') {

		// set $user as instance of 'User' by calling $model() from Controller class
		// 'User' is from Model
		$user = $this->model('User');

		// set name as the passed $param
		$user->name = $param;

		// pass data to View
		// 'home/index' is not the URL, but the file ('home' directory, 'index.php' file)
		$this->view('home/index', ['name' => $user->name]);

	}

	public function create($username = '', $email = '') {

		// insert data to db
		User::create([
			'username'	=> $username,
			'email'			=> $email
		]);

		$this->view('home/index', ['name' => $username]);

	}

}
