
<?php


$person =[

  'age'=> 24,
  'hair'=>'blonde',
  'career'=> 'tech specialist'
];


$person['name'] = 'Dani';


unset($person['age']);


require 'index.view.php';
