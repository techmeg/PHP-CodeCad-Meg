<?php

$app = [];

$app['config'] = require 'config.php';
//$config = require 'config.php';

require 'core/Router.php';

require 'core/Request.php';

require 'core/database/Connection.php';

require 'core/database/QueryBuilder.php';

$app['database']= new QueryBuilder(
  Connection::make($app['config']['database'])
);
//replaced by above...
// return new QueryBuilder(
//   Connection::make($config['database'])
// );