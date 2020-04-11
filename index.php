
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
'due'=>'Tonight',
'Assigned_to'=> 'Eric',
'Completed' => false //($completed)


];

require 'index.view.php';
