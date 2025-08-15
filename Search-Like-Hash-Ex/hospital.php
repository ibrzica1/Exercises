<?php

$baza = mysqli_connect("localhost","root","","hospital");

$rezultat = $baza->query("SELECT * FROM patients WHERE first_name LIKE '%or' ");

foreach($rezultat as $patient)
{
  echo $patient["first_name"]."<br>";
}