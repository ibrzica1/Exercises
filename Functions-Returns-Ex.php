<?php

function zbrojParnih($array)
{
  $total = 0;
  foreach($array as $broj)
  {
    if($broj % 2 == 0)
    {
      $total += $broj;
    }
  }
  return $total;
}

$brojevi = [11,2,4,24,23,13,7,8];

echo zbrojParnih($brojevi)."<br>";

$stringovi = ["stol", "Petar", "Kreso","pas","macka","Afrika"];


function provjeriPrvoSlovo($array)
{
  $velikaSlova = [];
  foreach($array as $string)
  {
    $noviArray = str_split($string);

    if(ctype_upper($noviArray[0]))
    {
      array_push($velikaSlova, $string);
    }
  }
  return $velikaSlova;
}

function pozitivanIliNegativan($broj)
{
  if($broj > 0)
  {
    return "Pozitivan"."<br>";
  }
  elseif($broj < 0)
  {
    return "Negativan"."<br>";
  }
  elseif($broj == 0)
  {
    return "Nula"."<br>";
  }
}

echo pozitivanIliNegativan(-6);

$godine = [1992,2012,1988,1985,1967,2010];

function starijiOd1990($array)
{
  $starijeGodine = [];
  foreach($array as $godina)
  {
    if($godina < 1990)
    {
      array_push($starijeGodine,$godina);
    }
  }
  return $starijeGodine;
}

$ocjene = [
  "Igor" => 5,
  "Toma" => 5,
  "Marko" => 3,
  "Boris" => 4,
  "Goran" => 3
];

function odlikasi($array)
{
  $brojOdlikasa = 0;
  foreach($array as $ime => $ocjena)
  {
    if($ocjena > 4)
    {
      $brojOdlikasa++;
    }
  }
  return $brojOdlikasa."<br>";
}

echo odlikasi($ocjene);

function najveciBroj($array)
{
  $najveciBroj = -1000000000;
  foreach($array as $broj)
  {
    if($broj > $najveciBroj)
    {
      $najveciBroj = $broj;
    }
  }
  return $najveciBroj."<br>";
}

echo najveciBroj($godine);

$korisnici =[
    "Toma", "Pavle", "Veljko",
    "Marko", "Petar", "Nikola"
  ];

function rijec5Slova($array)
{
  $petSlova = [];
  foreach($array as $ime)
  {
    if(strlen($ime) == 5)
    {
      array_push($petSlova,$ime);
    }
  }
  return $petSlova;
}

$temeperature = [12,23,32,-1,-4,25,30];

function najvecaTemperatura($array)
{
  $najvecaTemp = -1000000000;
  foreach($array as $temp)
  {
    if($temp > $najvecaTemp)
    {
      $najvecaTemp = $temp;
    }
  }
  return $najvecaTemp."<br>";
}

echo najvecaTemperatura($temeperature);

$proizvodi = [
  "PC" => 1000,
  "Sofa" => 400,
  "Televizor" => 330,
  "Stol" => 232,
  "Stolica" => 110
];

function prosjecnaCijena($array)
{
  $total = 0;
  $kolicinaProizvoda = count(array_keys($array));
  $prosjecnaCijena = 0;

  foreach($array as $proizvod => $cijena)
  {
    $total += $cijena;
  }

  $prosjecnaCijena = $total / $kolicinaProizvoda;
  return $prosjecnaCijena;
}

echo prosjecnaCijena($proizvodi);


?>