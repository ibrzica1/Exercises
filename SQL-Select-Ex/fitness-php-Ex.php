<?php

$baza = mysqli_connect("localhost","root","","fitnessclub");

if(mysqli_connect_error())
{
  die("Povezivanje sa bazom nije uspjelo");
}

if(!isset($_POST["first_name"]) || empty($_POST["first_name"]))
{
  die("Niste unijeli first name");
}
else{
  $firstName = $_POST["first_name"];
}
if(!isset($_POST["last_name"]) || empty($_POST["last_name"]))
{
  die("Niste unijeli last name");
}
else{
  $lastName = $_POST["last_name"];
}
if(!isset($_POST["membership_start"]) || empty($_POST["membership_start"]))
{
  die("Niste unijeli membership start");
}
else{
  $membershipStart = $_POST["membership_start"];
}
if(!isset($_POST["membership_type"]) || empty($_POST["membership_type"]))
{
  die("Niste unijeli membership type");
}
else{
  $membershipTtype = $_POST["membership_type"];
}

$insertMembers = "INSERT INTO members(first_name,last_name,membership_start,membership_type)
VALUES('$firstName','$lastName','$membershipStart','$membershipTtype')";

$baza->query($insertMembers);