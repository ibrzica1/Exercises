<?php

$baza = mysqli_connect("localhost","root","","web_shop");

if(!isset($_POST["search"]) || empty($_POST["search"]))
{
  die("Niste unijeli polje pretrazivanje");
}

$search = $_POST["search"];

$emailPostoji = $baza->query("SELECT * FROM korisnici WHERE email = '$search' ");

if($emailPostoji->num_rows > 0)
{
  die ("Email postoji u bazi");
}
else
{
  die ("Email ne postoji u bazi");
}