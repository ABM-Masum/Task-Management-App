<?php

// foreach ($_SERVER as $key => $value) {
// 	print $key .  " = " . $value . "<br>";
// };
// die();

require 'vendor/autoload.php';

require 'core/bootstrap.php';

use App\Core\{Router, Request};

Router::load('routes.php')

			->direct(Request::uri(), Request::method());