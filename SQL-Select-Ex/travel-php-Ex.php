<?php

$baza = mysqli_connect("localhost","root","","fitnessclub");

if(mysqli_connect_error())
{
  die("Povezivanje sa bazom nije moguce");
}

if(!isset($_POST["member_id"]) || empty($_POST["member_id"]))
{
  die("Niste unijeli member id");
}
else{
  $memberId = $_POST["member_id"];
}

if(!isset($_POST["comment"]) || empty($_POST["comment"]))
{
  die("Niste unijeli comment");
}
else{
  $comment = $_POST["comment"];
}

if(!isset($_POST["rating"]) || empty($_POST["rating"]))
{
  die("Niste unijeli rating");
}
else{
  $rating = $_POST["rating"];
}

$insertFeedback = "INSERT INTO feedback (member_id,comment,rating)
VALUES ($memberId,'$comment',$rating)";

$baza->query($insertFeedback);