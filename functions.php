
<?php

function dd ($data){

echo '<pre>';

die(var_dump($data));

echo '</pre>';

}

function agecheck ($age){

return ($age >= 21);

}

require 'index.view.php';
