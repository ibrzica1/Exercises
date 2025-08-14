<?php

$baza = mysqli_connect("localhost","root","","hospital");

if(mysqli_connect_error())
{
  die("Povezivanje sa bazom nije uspjelo");
}

$rezultat = $baza->query("SELECT * FROM patients");

$pacijenti = $rezultat->fetch_all(MYSQLI_ASSOC);

foreach($pacijenti as $pacijent)
{
  echo $pacijent["first_name"]." ". $pacijent["last_name"]."<br>";
}