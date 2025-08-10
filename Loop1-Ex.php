<?php

  $brojevi = [-2, 4, 23, -14, -5, 54];
  $suma = 0;

  foreach($brojevi as $broj)
  {
    if($broj > 0)
    {
      $suma += $broj;
    }
  }

  echo $suma. "<br>";

  $ocjene = [3,4,5,4,4,2,2,3,3,3,1];
  $prosjekOcjena = round(array_sum($ocjene) / count($ocjene),2);

  $ocjeneIznadProsijeka = 0;

  foreach($ocjene as $ocjena)
  {
    if($ocjena > $prosjekOcjena)
    {
      $ocjeneIznadProsijeka++;
    }
  }

  echo "$ocjeneIznadProsijeka ocjena je iznad prosijeka". "<br>";

  $parniBrojevi = [];

  foreach($ocjene as $ocjena)
  {
    if($ocjena % 2 == 0)
    {
      array_push($parniBrojevi,$ocjena);
    }
  }

 $korisnik = [
      "ime" => "Luka",
      "email" => "luka@example.com",
      "adresa" => [
          "ulica" => "Ilica 25",
          "grad" => "Zagreb",
          "postanski_broj" => "10000"
        ]
    ];

  foreach($korisnik as $kljuc => $vrednost)
  {
      echo $vrednost. "<br>";
  }

?>