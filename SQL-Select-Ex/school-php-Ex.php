<?php

$baza = mysqli_connect("localhost","root","","school");

if(mysqli_connect_error())
{
  die("Povezivanje sa bazom nije uspjelo");
}

if(!isset($_POST["name"]) || empty($_POST["name"]))
{
  die("Niste unijeli name");
}
else
{
  $name = $_POST["name"];
}

if(!isset($_POST["students"]) || empty($_POST["students"]))
{
  die("Niste unijeli students");
}
else
{
  $students = $_POST["students"];
}

$insertClass = "INSERT INTO classes(name,students)
VALUES ('$name',$students)";

$baza->query($insertClass);

