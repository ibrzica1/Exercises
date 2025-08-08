<?php

$broj = $_GET["input_broj"];
$user = $_GET["user_name"];
$day = $_GET["day_week"];
$dataType = $_GET["data_type"];
$firstNumber = $_GET["number_1"];
$secondNumber = $_GET["number_2"];

if ($broj != null) 
{
    if($broj%2 == 0)
    {
      echo "Broj je paran". "<br />";
    }
    elseif($broj%2 == 1)
    {
      echo "Broj je neparan". "<br />";
    }
}
else
{
  echo "Broj nije unesen". "<br />";
}

if ($user != null)
{
    echo "Dobrodosao $user". "<br />";
}
else
{
    echo "User nije unesen". "<br />";
}

if($day > 0 && $day < 8)
{
    switch($day)
    {
          case 1:
          echo "Ponedjeljak". "<br />";
          break;
          case 2:
          echo "Utorak". "<br />";
          break;
          case 3:
          echo "Srijeda". "<br />";
          break;
          case 4:
          echo "Cetvrtak". "<br />";
          break;
          case 5:
          echo "Petak". "<br />";
          break;
          case 6:
          echo "Subota". "<br />";
          break;
          case 7:
          echo "Nedjelja". "<br />";
          break;
    }
}
else
{
  echo "Broj mora biti 0 do 7". "<br />";
}

if(is_numeric($dataType))
  {
      if(str_contains($dataType,"."))
        {
          echo "Data je float". "<br />";
        }
      else
        {
          echo "Data je integer". "<br />";
        }
  }
elseif($dataType == "true" || $dataType == "false")
  {
    echo "Data je boolean". "<br />";
  }
elseif($dataType == null)
  {
    echo "Data nije unesen". "<br />";
  }
else
  {
    echo "Data je string". "<br />";
  }

  if(is_numeric($firstNumber) && is_numeric($secondNumber))
  {
    $result = $firstNumber + $secondNumber;
    echo "Zbroj $firstNumber i $secondNumber je $result". "<br />";
  }
  else
  {
    echo "Neispravan unos". "<br />";
  }
?>