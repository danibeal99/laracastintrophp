<?php
class Post

{

public $title;


public $published;

  public function __construct($title, $published)

      {
          $this->title = $title;

          $this->published=$published;

      }



}


$posts=[

  new post ('My First Post', true),

  new post ('My Second Post', true),

  new post ('My Third Post', true),

  new post ('My Fourth Post', false)




];


$unpublishedposts = array_filter($posts, function ($post){

return ! $post->published;


});

$publishedposts = array_filter($posts, function ($post){

return $post->published;


});


var_dump ($unpublishedposts);
