
<?php

$database= require 'core/bootstrap.php';


//die(var_dump($app));

require router::load('routes.php')

->direct (Request::uri(), Request::method());
