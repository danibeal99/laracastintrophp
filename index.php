
<?php

require 'Task.php';

require 'functions.php';

$pdo = connecttodb();


$tasks = fetchalltasks ($pdo);

require 'index.view.php';
