<?php

$baza = mysqli_connect("localhost","root","","musicstore");

if(mysqli_connect_error())
{
  die("Baza nije pronadena");
}

$rezultat = $baza->query("SELECT * FROM sales");

if($rezultat->num_rows < 1)
{
  die("Nema sales u bazi");
}

$sales = $rezultat->fetch_all(MYSQLI_ASSOC);
$dateNow = date("Y-m-d", strtotime('-7 days'));
echo $dateNow."<br>";

foreach($sales as $sale)
{
  if($sale["date"] > $dateNow)
  {
    echo $sale["price"]."<br>";
  }
}