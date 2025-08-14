<?php

$baza = mysqli_connect("localhost","root","","netflix");

if(mysqli_connect_error())
{
  die("Problem sa povezivanjem baze");
}

if(!isset($_POST["username"]) || empty($_POST["username"]))
{
  die("Niste unijeli username");
}
else
{
  $username = $_POST["username"];
}

if(!isset($_POST["email"]) || empty($_POST["email"]))
{
  die("Niste unijeli email");
}
else
{
  $email = $_POST["email"];
}

if(!isset($_POST["password"]) || empty($_POST["password"]))
{
  die("Niste unijelipassword");
}
else
{
  $password = $_POST["password"];
}

$insertUser = "INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";

$baza->query($insertUser);