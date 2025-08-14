<?php

$baza = mysqli_connect("localhost","root","","school");

$rezultat = $baza->query("SELECT * FROM classes");

$classes = $rezultat->fetch_all(MYSQLI_ASSOC);

foreach($classes as $class)
{
  if($class["students"] > 10)
  {
    echo $class["name"]."<br>";
  }
}