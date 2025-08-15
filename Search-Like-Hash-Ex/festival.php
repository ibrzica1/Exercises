<?php

$baza = mysqli_connect("localhost","root","","festivals");

$rezultat = $baza->query("SELECT * FROM events WHERE event_name LIKE '%tra' ");

foreach($rezultat as $event)
{
  echo $event["event_name"]."<br>";
}