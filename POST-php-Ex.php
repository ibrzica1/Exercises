<?php

  if(isset($_POST["pin"]))
  {
    $pin = trim($_POST["pin"]);
  }
  else
  {
    die("Pin nije proslijeden");
  }

  if(isset($_POST["user_name"]))
  {
    $user = trim($_POST["user_name"]);
  }
  else
  {
    die("User name nije proslijeden");
  }

  $duzinaPina = strlen($pin);
  $duzinaUser = strlen($user);

  if($duzinaPina < 4 || $duzinaPina > 6)
  {
    echo "Pin mora imati najmanje 4, a maksimum 6 karaktera". "<br />";
  }
  else
  {
    echo "Uspjesno ste unjeli pin". "<br />";
  }

  if($duzinaUser < 4)
  {
    echo "User name mora biti duzi od 3 karaktera". "<br />";
  }
  else
  {
    echo "Uspjesno ste unjeli user name". "<br />";
  }

  $number = $_POST["number"];

  if(is_numeric($number))
  {
    if($number%2 == 0)
    {
      echo "Broj je paran". "<br />";
    }
    if($number%2 == 1)
    {
      echo "Broj je neparan". "<br />";
    }
  }
  else
  {
    echo "Unos mora biti broj". "<br />";
  }

  $voce = trim($_POST["fruit"]);

  switch($voce)
  {
    case "limun":
      echo "Voce je zuto". "<br />";
      break;
    case "jagoda":
      echo "Voce je crveno". "<br />";
      break;
    case "naranca":
      echo "Voce je narancasto". "<br />";
      break;
    case "banana":
      echo "Voce je zuto". "<br />";
      break;
  }

  $month = trim($_POST["month"]);

  if(is_numeric($month))
  {
    if($month > 0 && $month < 13)
    {
        switch($month)
          {
            case 1:
              echo "Januar";
              break;
            case 2:
              echo "Februar";
              break;
            case 3:
              echo "Mart";
              break;
            case 4:
              echo "April";
              break;
            case 5:
              echo "Maj";
              break;
            case 6:
              echo "Juni";
              break;
            case 7:
              echo "Juli";
              break;
            case 8:
              echo "August";
              break;
            case 9:
              echo "Septembar";
              break;
            case 10:
              echo "Oktobar";
              break;
            case 11:
              echo "Novembar";
              break;
            case 12:
              echo "Decembar";
              break;
          }
    }
    else{echo "Broj mora biti izmedu 1 do 12". "<br />";}
  }
  else
  {
    echo "Unos mora biti broj". "<br />";
  }


  if(is_numeric($_POST["age"]))
  {
    $age = $_POST["age"];

    if ($age > 17)
      {
        echo "Punoletan si". "<br />";
      }
      elseif ($age >= 0 && $age < 18)
      {
        echo "Maloletan si". "<br />";
      }

  }
  else
  {
    echo "Unos mora biti broj". "<br />";
  }

  if(is_numeric($_POST["grade"]))
  {
    $grade = $_POST["grade"];

    if ($grade > 0 && $grade < 6)
      {
        switch ($grade)
        {
          case 1:
            echo "Nedovoljan". "<br />";
            break;
          case 2:
            echo "Dovoljan". "<br />";
            break;
          case 3:
            echo "Dobar". "<br />";
            break;
          case 4:
            echo "Vrlo dobar". "<br />";
            break;
          case 5:
            echo "Odlican". "<br />";
            break;
        }
      }
      else
      {
        echo "Broj mora biti izmedu 1 do 5". "<br />";
      }
  }
  else
  {
    echo "Unos mora biti broj". "<br />";
  }

  if(is_numeric($_POST["temp"]))
  {
    $temp = trim($_POST["temp"]);

    if($temp >= 0)
    {
      echo "Temperatura je iznad 0";
    }
    elseif ($temp < 0)
    {
      echo "Temperatura je ispod 0";
    }
  }
  else
  {
    echo "Unos mora biti broj". "<br />";
  }


?>