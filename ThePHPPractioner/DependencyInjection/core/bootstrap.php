<?php

App::bind('config', require 'config.php');
$config = App::get('config');

// putting config into App container^
// $app = [];
// $app['config'] = require 'config.php';

//die(var_dump(App::get('config')));

// these files now autoloaded by composer -- in Composer Autoloading lesson
// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';


App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));

//putting database query into App container
// $app['database']= new QueryBuilder(
//   Connection::make($app['config']['database'])
// );
