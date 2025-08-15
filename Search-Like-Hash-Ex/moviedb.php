<?php

$baza = mysqli_connect("localhost","root","","moviedb");

$rezultat = $baza->query("SELECT * FROM movies WHERE title LIKE '%man%' ");

foreach($rezultat as $movie)
{
  echo $movie["title"]."<br>";
}