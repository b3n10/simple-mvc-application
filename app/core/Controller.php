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

	public function view($view_name, $data) {

	}

}
