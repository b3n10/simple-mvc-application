<?php

class Home extends Controller {

	public function index($param = '') {

		// set $user as instance of 'User' by calling $model() from Controller class
		$user = $this->model('User');

		// set name as the passed $param
		$user->name = $param;

		$this->view('home/index', ['name' => $user->name]);
	}

}
