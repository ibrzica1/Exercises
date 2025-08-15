<?php

$baza = mysqli_connect("localhost","root","","fitnessclub");

$rezultat = $baza->query("SELECT * FROM members WHERE last_name LIKE '%ic' ");

foreach($rezultat as $member)
{
  echo $member["last_name"]."<br>";
}