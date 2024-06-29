
<!--
  lets talk about code organisation, readability and why one should separate the php logic from the template (html)
-->


 <?php 


$books = [

  [
    'name' => 'Do Andriods Dream of Electric Sheep',
    'author' => 'Philip K. Dick',
    'releaseYear' => 1968,
    'purchaseUrl' => 'http://example.com'
  ],


  [
    'name' => 'Project Hail Mary',
    'author' => 'Andy Weir',
    'releaseYear' => 2021,
    'purchaseUrl' => 'http://example.com'
  ],



  [
    'name' => 'The Martians',
    'author' => 'Andy Weir',
    'releaseYear' => 2011,
    'purchaseUrl' => 'http://example.com'
  ],

];


  $filteredBooks = array_filter($books, function ($book) {

   
    return $book['releaseYear'] > 1950 && $book['releaseYear'] <= 2020;

  });



require "index.view.php";





