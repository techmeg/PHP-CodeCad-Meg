<?php

class Post
{

  public $title;

  public $author;

  public $published;

  public function __construct($title, $author, $published)
  {
    $this->title = $title;
    $this->author = $author;
    $this->published = $published;
  }
}

$posts = [
  new Post('My First Post', 'MP', true),
  new Post('My Second Post', 'MP', true),
  new Post('My Third Post', 'KK', true),
  new Post('My Fourth Post', 'JM', false)
];

//var_dump($posts);

// $unpublishedPosts = array_filter($posts, function($post) {

//   return ! $post->published;

// });

// var_dump($unpublishedPosts);

// $publishedPosts = array_filter($posts, function ($post) {

//   return $post->published;
// });

// var_dump($publishedPosts);

$posts = array_map(function ($post) {
  // $post->published = true;
  // return $post;
  return (array) $post; //modify to array of arrays, rather than Posts
  //return $post->title;

}, $posts);

//$titles = array_column($posts, 'title');

$titles = array_column($posts, 'author', 'title');

var_dump($titles);