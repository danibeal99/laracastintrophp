<?php


$app = [];

$app['config'] = require 'config.php';


require 'core/Router.php';

require 'core/Request.php';

require 'core/database/connections.php';

require 'core/database/QueryBuilder.php';


$app['database'] = new QueryBuilder(

  connection::make($app['config']['database'])

);
