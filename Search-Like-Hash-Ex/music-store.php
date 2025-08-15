<?php

$baza = mysqli_connect("localhost","root","","musicstore");

$rezultat = $baza->query("SELECT * FROM sales WHERE date LIKE '2024%' ");

foreach($rezultat as $sale)
{
  echo $sale["date"];
}