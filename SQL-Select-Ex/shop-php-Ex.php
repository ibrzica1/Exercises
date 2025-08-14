<?php

$baza = mysqli_connect("localhost","root","","shop");

if(mysqli_connect_error())
{
  die("Povezivanje sa bazom nije uspjelo");
}

if(!isset($_POST["product_name"]) || empty($_POST["product_name"]))
{
  die("Niste unijeli productname");
}
else
{
  $productName = $_POST["product_name"];
}
if(!isset($_POST["price"]) || empty($_POST["price"]))
{
  die("Niste unijeli price");
}
else
{
  $price = $_POST["price"];
}
if(!isset($_POST["stock_quantity"]) || empty($_POST["stock_quantity"]))
{
  die("Niste unijeli stock quantity");
}
else
{
  $ustockQuantity = $_POST["stock_quantity"];
}
if(!isset($_POST["category"]) || empty($_POST["category"]))
{
  die("Niste unijeli category");
}
else
{
  $category = $_POST["category"];
}

$insertProducts = "INSERT INTO products(product_name,price,stock_quantity,category)
VALUES ('$productName',$price,$ustockQuantity,'$category')";

$baza->query($insertProducts);