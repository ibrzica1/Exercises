<?php

$baza = mysqli_connect("localhost","root","","shop");

$rezultat = $baza->query("SELECT * FROM products WHERE price LIKE '%9%' ");

foreach($rezultat as $product)
{
  echo $product["product_name"]."<br>";
}