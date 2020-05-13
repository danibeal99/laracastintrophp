<?php

$database = require 'core/database/bootstrap.php';


//die(var_dump($app));

require router::load('routes.php')

->direct (Request::uri(), Request::method());
