<?php

$users = $app['database']->selectall('users');


require 'views/index.view.php';
