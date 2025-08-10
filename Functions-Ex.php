<?php

$brojevi = [1,23,5,9,18,67,81];

function brojeviVeciOd10($brojevi)
{
  foreach($brojevi as $broj)
  {
    if($broj > 10)
    {
      echo $broj." ";
    }
  }
  echo "<br>";
}
 brojeviVeciOd10($brojevi);

$patike = ["Reebok", "Adidas", "Nike"];

function sadrziA($array)
{
  foreach($array as $item)
  {
    if(str_contains($item,"a"))
    {
      echo $item."<br>";
    }
  }
}

sadrziA($patike);

function jelBrojParan($broj)
{
  if($broj % 2 == 0)
  {
    echo "Broj je paran"."<br>";
  }
  elseif($broj % 2 == 1)
  {
    echo "Broj je neparan"."<br>";
  }
}

jelBrojParan(6);

$godista = [2005,2010,1999,1995,2011,1988];

function provjeriGodista($array)
{
  foreach($array as $item)
  {
    if($item > 2000)
    {
      echo $item." ";
    }
  }
  echo "<br>";
}

provjeriGodista($godista);

$ocjene = [
  "Toma" => 5,
  "Marko" => 4,
  "Ivan" => 2,
  "Boris" => 4
];

function provjeriOcjenu($array)
{
  foreach($array as $osoba => $ocjena)
  {
    echo $ocjena." ";
  }
  echo "<br>";
}

provjeriOcjenu($ocjene);

function djeljivostSa9($array)
{
  foreach($array as $broj)
  {
    if($broj % 9 == 0)
    {
      echo "$broj je djeljiv sa 9"."<br>";
    }
    else
    {
      echo "$broj nije djeljiv sa 9"."<br>";
    }
  }
}

djeljivostSa9($brojevi);

function checkPalindrome($string)
{
  $array = str_split($string,1);
  $stringLength = strlen($string);
  $length = floor($stringLength/2);
  
  for($i=0; $i < $length; $i++)
  {
    $j = $stringLength - $i - 1;
    if($array[$i] != $array[$j])
    {
      echo "String nije palindrome"."<br>";
      return;
    }
  }
  echo "String je palindrome"."<br>";
}

checkPalindrome("hannaha");

$imena = ["igor", "Marko", "Denis", "ivan", "Josip"];

function provjeriPrvoSlovo($array)
{
  foreach($array as $ime)
  {
    $stringArray = [];
    $stringArray = str_split($ime);
    if(ctype_upper($stringArray[0]))
    {
      echo $ime."<br>";
    }
  }
}

provjeriPrvoSlovo($imena);

$temperature = [-1,12,24,-12,-6,34];

function pozitivniCelzijusi($array)
{
  foreach($array as $celzijus)
  {
    if($celzijus >= 0)
    {
      echo "$celzijus je pozitivan"."<br>";
    }
    else
    {
      echo "$celzijus je negativan"."<br>";
    }
  }
}

pozitivniCelzijusi($temperature);

$proizvodi = [
  "PC" => 1000,
  "Krumpir" => 10,
  "Hlace" => 150,
  "Majica" => 40,
  "Sofa" => 400
];

function skupljiProizvodi($array)
{
  foreach($array as $proizvod => $cijena)
  {
    if($cijena > 100)
    {
      echo $proizvod."<br>";
    }
  }
}

skupljiProizvodi($proizvodi);

?>