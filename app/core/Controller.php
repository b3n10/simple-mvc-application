<?php
// Controller handles the Model
// then output to View

class Controller {

	public function model($model) {

		// require $model
		require_once '../app/models/' . $model . '.php';

		// return instance of $model
		return new $model();

	}

	public function view($view, $data = []) {

		// require $view ('file' or 'directory/file')
		require_once '../app/views/' . $view . '.php';

		// this method will run the required file then pass $data as the parameter

	}

}
