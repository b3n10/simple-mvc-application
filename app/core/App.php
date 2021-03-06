<?php

class App {

	protected $controller	= 'home',
						$method			= 'index',
						$params			= [];

	public function __construct() {
		$url = $this->parseUrl();

		// check if first index in $url array is a controller (or if it's a file in controllers folder)
		if (file_exists('../app/controllers/' . $url[0] . '.php')) {

			// set protected $controller to that file
			$this->controller = $url[0];

			// remove controller so method & param are left in the array
			unset($url[0]);

		}

		// even if $url[0] is not a valid file, require default protected $controller ('home.php')
		require_once '../app/controllers/' . $this->controller . '.php';

		// create instance of controller
		$this->controller = new $this->controller;

		// if there is 2nd index
		if (isset($url[1])) {

			// if $url[1] is a method in $this->controller
			if (method_exists($this->controller, $url[1])) {

				// set protected method to that method
				$this->method = $url[1];

				// remove method so param is left in the array
				unset($url[1]);

			}

			// if 3rd index on array is set, pass it as array to protected $param, else empty array
			$this->params = $url ? array_values($url) : [];

			// run the method by passing an array (object of class and method) and it's params
			echo call_user_func_array([$this->controller, $this->method], $this->params);

		}

	}

	public function parseUrl() {

		// if query string is passed
		if (isset($_GET['url'])) {

			// remove the trailing slash
			// sanitize the url with filter_var
			// explode to an array by slash
			return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));

		}

	}

}
