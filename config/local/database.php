<?php

return [
 

		'mysql' => [
			'driver'    => 'mysql',
			'host'      => env('DB_HOST', 'localhost'),
			'database'  => env('DB_DATABASE', 'grace'),
			'username'  => env('DB_USERNAME', 'newuser'),
			'password'  => env('DB_PASSWORD', 'admin'),
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => 'local',
			'strict'    => false,
		],

 

];
