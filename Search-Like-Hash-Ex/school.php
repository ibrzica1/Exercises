<?php

$baza = mysqli_connect("localhost","root","","school");

$rezultat = $baza->query("SELECT * FROM classes WHERE name LIKE '%mat%' ");

foreach($rezultat as $class)
{
  echo $class["name"]."<br>";
}