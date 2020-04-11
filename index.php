
<?php


$person =[

  'age'=> 24,
  'hair'=>'blonde',
  'career'=> 'tech specialist'
];


$person['name'] = 'Dani';


unset($person['age']);

// Homework 7

$task = [

'title'=> 'Make dinner',
'Due'=>'Tonight',
'Assigned_to'=> 'Eric',
'Completed' => 'No'

  
];

require 'index.view.php';
