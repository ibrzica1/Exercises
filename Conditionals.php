
<?php

  
  $broj = 4;
  $provjeraBroja = $broj % 2;

  if($provjeraBroja == 0)
  {
    echo "Broj je paran". "<br />";
  }
  else
  {
    echo "Broj je neparan". "<br />";
  }

  $automobili = ["Golf 1", "Golf 2", "Golf 3"];

  if(in_array("Golf 2", $automobili))
  {
    echo "Nasli smo najboljeg golfa". "<br />";
  }
  else
  {
    echo "Nismo nasli najboljeg golfa". "<br />";
  }

  $godine = 22;

  if($godine >= 18)
  {
    echo "Vi ste punoljetni". "<br />";
  }
  else
  {
    echo "Vi niste punoljetni". "<br />";
  }

  $date = date("Y");

  if($date > 2000)
  {
    echo "Gen Z". "<br />";
  }
  else
  {
    echo "Nije Gen Z". "<br />";
  }

  function provjeraDanaUNedjelji($unos)
  {
    if($unos == 1) {echo "Ponedjeljak". "<br />";}
    elseif($unos == 2) {echo "Utorak". "<br />";}
    elseif($unos == 3) {echo "Srijeda". "<br />";}
    elseif($unos == 4) {echo "Cetvrtak". "<br />";}
    elseif($unos == 5) {echo "Petak". "<br />";}
    elseif($unos == 6) {echo "Subota". "<br />";}
    elseif($unos == 7) {echo "Nedjelja". "<br />";}
    else{echo "Unos mora biti broj 1 do 7";}
  }

  provjeraDanaUNedjelji($broj);

  function provjeraPozitivanNegativan($unos)
  {
    if($unos > 0) {echo "Broj je pozitivan". "<br />";}
    elseif($unos < 0) {echo "Broj je negativan". "<br />";}
    elseif($unos == 0) {echo "Broje je nula". "<br />";}
    else {echo "Unos mora biti broj". "<br />";}
  }

  provjeraPozitivanNegativan($broj);

?>