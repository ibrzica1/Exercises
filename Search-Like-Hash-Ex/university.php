<?php

$baza = mysqli_connect("localhost","root","","university");

$rezultat = $baza->query("SELECT * FROM professors WHERE department = 'IT' ");

foreach($rezultat as $professor)
{
  echo $professor["department"]."<br>";
}