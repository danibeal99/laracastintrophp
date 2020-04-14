
<?php


class Task{

  public $description;

  public $completed = false;

  public function __construct($description)

  {

      $this->description = $description;

    }

    public function complete()

    {

      $this->completed = true;

    }


    public function iscomplete()
    {

      return $this->completed;

    }

}

$tasks = [

  new Task ('Go to the store'),
  new Task ('Finsih my homework'),
  new Task ('clean my room'),

];

$tasks[0]->complete();


require 'index.view.php';
