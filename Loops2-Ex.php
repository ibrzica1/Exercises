<?php

$ucenici = ["Toma", "Marko", "Mateja", "Milica", "Teodora", "Petar"];
$uceniciDuzeOd5 = 0;

foreach($ucenici as $ucenik)
{
  $duzina = strlen($ucenik);

  if($duzina > 5)
  {
    $uceniciDuzeOd5++;
  }
}

echo $uceniciDuzeOd5."<br>";

$ocjene = [3,4,5,4,4,2,2,3,3,3,1];
$neparniBrojevi = [];

foreach($ocjene as $ocjena)
{
    if($ocjena % 2 == 1)
    {
      array_push($neparniBrojevi,$ocjena);
    }
}

$prosecnaVrijednost = array_sum($neparniBrojevi) / count($neparniBrojevi);

echo $prosecnaVrijednost."<br>";

$cijene = [22, 123, 300, 10, 45, 670];
$total = 0;

foreach($cijene as $cijena)
{
    if($cijena > 100)
    {
      $total += $cijena;
    }
}

echo $total."<br>";

$godine = [12, 23, 34, 24, 14, 16, 17];
$punoLetni = [];

foreach($godine as $godina)
{
  if($godina > 18)
  {
    array_push($punoLetni,$godina);
  }
}

var_dump($punoLetni);

?>