
<?php



function connecttodb()

{

try {

return NEW PDO('mysql:host=127.0.0.1;dbname=mytodos','dani2','danimatt22');

} catch (PDOException $e) {

  die ($e->getmessage());
}
}


function fetchalltasks($pdo)

{

  $statement = $pdo->prepare ('select * from todos');

  $statement->execute();

  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}




function dd ($data){

echo '<pre>';

die(var_dump($data));

echo '</pre>';

}

function agecheck ($age){

return ($age >= 21);

}
