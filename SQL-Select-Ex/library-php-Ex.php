<?php

$baza = mysqli_connect("localhost","root","","library");

$title = $_POST["title"];
$author = $_POST["author"];
$publishedYear = $_POST["published_year"];
$genre = $_POST["genre"];

$insertBook = "INSERT INTO books(title,author,published_year,genre)
VALUES ('$title','$author',$publishedYear,'$genre')";

$baza->query($insertBook);