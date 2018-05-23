<?php
// Controller handles the Model

class Controller {

	public function model($model) {

		// require $model
		require_once '../app/models/' . $model . '.php';

		// return instance of $model
		return new $model();

	}

}
