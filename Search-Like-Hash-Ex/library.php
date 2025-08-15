<?php

$baza = mysqli_connect("localhost","root","","library");

$rezultat = $baza->query("SELECT * FROM books WHERE title LIKE '%ring%' ");

foreach($rezultat as $book)
{
  echo $book["title"]."<br>";
}