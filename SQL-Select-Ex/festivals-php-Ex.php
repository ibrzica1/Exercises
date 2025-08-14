<?php

$baza = mysqli_connect("localhost","root","","festivals");

if(!isset($_POST["event_name"]) || empty($_POST["event_name"]))
{
  die("Niste unijeli event name");
}
else
{
  $eventName = $_POST["event_name"];
}

if(!isset($_POST["event_date"]) || empty($_POST["event_date"]))
{
  die("Niste unijeli event event date");
}
else
{
  $eventDate = $_POST["event_date"];
}

if(!isset($_POST["location"]) || empty($_POST["location"]))
{
  die("Niste unijeli event location");
}
else
{
  $location = $_POST["location"];
}

$insertEvent = "INSERT INTO events(event_name,event_date,location)
VALUES ('$eventName','$eventDate','$location')";

$baza->query($insertEvent);