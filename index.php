
<?php


require 'functions.php';

//$animals = ['dog','cat'];

//dd($animals);


if (agecheck(25)) {
  echo "You can enter the club.";
} else {
  echo "You cannot enter the club.";
}



require 'index.view.php';
