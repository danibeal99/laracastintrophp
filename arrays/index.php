<?php
class Post

{

public $title;

public $author;

public $published;

  public function __construct($title,$author, $published)

      {
          $this->title = $title;

          $this->author = $author;

          $this->published=$published;

      }



}


$posts=[

  new post ('My First Post','Eric', true),

  new post ('My Second Post', 'Dani', true),

  new post ('My Third Post', 'Anthony', true),

  new post ('My Fourth Post','Toni', false)




];

$posts = array_map (function ($post) {

  return (array) $post;

}, $posts);

$authors = array_column($posts, 'author','title');

var_dump ($authors);




//$titles = array_column ($posts,'title');


// $unpublishedposts = array_filter($posts, function ($post){
//
// return ! $post->published;
//
//
// });
//
// $publishedposts = array_filter($posts, function ($post){
//
// return $post->published;
//
//
// });

// $modified = array_map(function ($post) {
//
// return $post->title;
//
// },$posts);


// foreach ($posts as $post){
//
//   $post->published=true;
//
// }
