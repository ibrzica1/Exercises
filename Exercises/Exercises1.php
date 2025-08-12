<?php

  function provjeriSamoglasnik($string)
  {
    $string = strtolower($string);
    $samoglasnici = ["a","e","i","o","u"];
    $stringArray = str_split($string);
    $total = 0;

    foreach($stringArray as $slovo)
    {
      foreach($samoglasnici as $samoglasnik)
      {
        if($slovo == $samoglasnik)
        {
          $total++;
        }
      }
    }
    return "$string ima $total samoglasnika";

  }

  echo provjeriSamoglasnik("palatalizacija");

  function mojSort($array)
  {
    $sortedArray = [];

    foreach($array as $broj)
    {
      if($sortedArray == null)
      {
        array_push($sortedArray,$broj);
      }
      else
      {
        for($i=count($sortedArray)-1; $i >= 0; $i--)
        {
          if($broj >= $sortedArray[$i])
          {
            if($i == 0)
            {
              array_splice($sortedArray,0,0,$broj);
            }
            else
            {
              array_splice($sortedArray,$i-1,0,$broj);
            }
          }
        }
      }
    }
    return $sortedArray;
  }

  $brojevi = [23,34,1,45,87,5,13];

   var_dump(mojSort($brojevi));



?>