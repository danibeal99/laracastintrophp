
<?php

$query = require 'bootstrap.php';


$tasks = $query->selectall('todos');


require 'index.view.php';
