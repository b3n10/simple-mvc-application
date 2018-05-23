<?php

class App {

	protected $controller	= 'home',
						$method			= 'index',
						$params			= [];

	public function __construct() {
	}

	public function parseUrl() {

		if (isset($_GET['url'])) {

			// remove the trailing slash
			// sanitize the url with filter_var
			// explode to an array by slash
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}

	}

}
