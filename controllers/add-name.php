<?php

//var_dump('You typed ' . $_POST['name']);

$app['database']->insert('Users', [


  'name' => $_POST['name']

 ]);

header('Location: /');
