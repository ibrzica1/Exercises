<?php

$baza = mysqli_connect("localhost","root","","company");

$rezultat = $baza->query("SELECT * FROM emplyees");

if($rezultat->num_rows < 1)
{
  die("Ne postoje podaci u employees");
}
else
  {
    $employees = $rezultat->fetch_all(MYSQLI_ASSOC);
  }

foreach($employees as $employee)
{
  echo $employee["name"]."<br>";
}
