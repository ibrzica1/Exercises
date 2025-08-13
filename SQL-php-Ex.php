<?php

$bazaCompany = mysqli_connect("localhost","root","","company");

if(mysqli_connect_error())
{
  die("Desila se greska prilikom konektovanja sa bazom");
}

if(!isset($_POST["name"]) || empty($_POST["name"]))
{
  die("Niste unijeli name");
}
else{
  $name = $_POST["name"];
}

if(!isset($_POST["position"]) || empty($_POST["position"]))
{
  die("Niste unijeli position");
}
else{
  $position = $_POST["position"];
}

if(!isset($_POST["salary"]) || empty($_POST["salary"]))
{
  die("Niste unijeli salary");
}
else{
  $salary = $_POST["salary"];
}

if(!isset($_POST["hire_date"]) || empty($_POST["hire_date"]))
{
  die("Niste unijeli hire date");
}
else{
  $hireDate = $_POST["hire_date"];
}

$insertEmployees = "INSERT INTO emplyees (name,position,salary,hire_date)
VALUES('$name','$position',$salary,'$hireDate')";

$bazaCompany->query($insertEmployees);



$bazaFitness = mysqli_connect("localhost","root","","fitnessclub");

if(mysqli_connect_error())
{
  die("Povezivanje sa bazom nije uspjelo");
}

if(!isset($_POST["first_name"]) || empty($_POST["first_name"]))
{
    die("Niste unijeli ime");
}
else
{
  $ime = $_POST["first_name"];
}
if(!isset($_POST["last_name"]) || empty($_POST["last_name"]))
{
    die("Niste unijeli prezime");
}
else
{
  $prezime = $_POST["last_name"];
}
if(!isset($_POST["membership_start"]) || empty($_POST["membership_start"]))
{
    die("Niste unijeli membership start");
}
else
{
  $membershipStart = $_POST["membership_start"];
}
if(!isset($_POST["membership_type"]) || empty($_POST["membership_type"]))
{
    die("Niste unijeli membership type");
}
else
{
  $membershipType = $_POST["membership_type"];
}

$insertMembers = "INSERT INTO members (first_name,last_name,membership_start,membership_type) VALUES ('$ime','$prezime','$membershipStart','$membershipType')";

$bazaFitness->query($insertMembers);
?>