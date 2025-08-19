<?php

if(!isset($_POST["ime"]) || empty($_POST["ime"]))
{
  die("Niste poslali ime");
}

if(!isset($_POST["lozinka"]) || empty($_POST["lozinka"]))
{
  die("Niste poslali lozinku");
}

$ime = $_POST["ime"];
$lozinka = $_POST["lozinka"];

if(session_status() == PHP_SESSION_NONE)
{
  session_start();
}

$_SESSION['ime'] = $ime;

if(isset($_SESSION['ime']))
{
  $_SESSION['last_login_time'] = date('Y-m-d H:i:s');
}


header("Location: login.php");