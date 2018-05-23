<?php

// use Namespace as Name;
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule();
// or
// $capsule = new Illuminate\Database\Capsule\Manager\Capsule();

// create connection
$capsule->addConnection([
	'driver'			=> 'mysql',
	'host'				=> '127.0.0.1',
	'username'		=> 'root',
	'password'		=> 'jairah',
	'database'		=> 'simplemvc',
	'charset'			=> 'utf8',
	'collation'		=> 'utf8_unicode_ci',
	'prefix'			=> ''
]);


$capsule->bootEloquent();
