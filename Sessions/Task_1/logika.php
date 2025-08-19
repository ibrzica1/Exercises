<?php

if(!isset($_POST["ime"]) || empty($_POST["ime"]))
{
  die("Niste poslali ime");
}

$user_id;
$ime = $_POST["ime"];

if(session_status() == PHP_SESSION_NONE)
{
  session_start();
}

$_SESSION['ime'] = $ime;

function checkSession($session)
{
  if(isset($session))
  {
    $user_id = $session;
  }
  else
  {
    echo "Nema sesije";
  }
}
checkSession($_SESSION['ime']);
var_dump($user_id);

echo "Dobrodosao {$_SESSION['ime']}";