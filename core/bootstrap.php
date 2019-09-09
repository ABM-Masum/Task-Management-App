<?php

use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(

	Connection::make(App::get('config')['database'])

));

function view($name, $data = [])

{
	extract($data);

	return require "app/views/{$name}.view.php";
}

function redirect($path) {

	header("location: /{$path}");

}

// $app = [];

// $app['config'] = require 'config.php';

// require 'core/router.php';

// require 'core/request.php';

// require 'core/database/connection.php';

// require 'core/database/queryBuilder.php';

// $dbpdo = connection::make();
// $query = new queryBuilder($dbpdo);

// $app['database'] = new QueryBuilder(

// 	Connection::make($app['config']['database'])

// );
