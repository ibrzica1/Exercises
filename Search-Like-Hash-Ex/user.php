<?php

$baza = mysqli_connect("localhost","root","","netflix");

$rezultat = $baza->query("SELECT * FROM users WHERE username LIKE 'A%' ");

foreach($rezultat as $user)
{
  echo $user["username"];
}