
<?php
    $automobili = [
      "marka" => "Renault",
      "model" => "Scenic",
      "godiste" => 2010
    ];

    echo "Prodajem automobil $automobili[marka] $automobili[model] proizveden $automobili[godiste]";

    $user = [

    "Igor" => [
      "name" => "Igor",
      "lastName" => "Brzica",
      "age" => 37 
      ]

    ];

    $emptyArray = [];
    $emptyArray["age"] = 21;

    $user["Igor"]["birthYear"] = 1988; 

    echo $emptyArray["age"]. "<br />";

    $data = [

      "model" => "PC",
      "version" => 2.0, 
      "price" => 999
    
    ];

    unset($data["model"]);

    $korisnik = [
      "ime" => "Luka",
      "email" => "luka@example.com",
      "adresa" => [
          "ulica" => "Ilica 25",
          "grad" => "Zagreb",
          "postanski_broj" => "10000"
        ]
    ];

    echo "Ime: {$korisnik["ime"]} ". "<br />"
        ."Email: {$korisnik["email"]}". "<br />"
        ."Adresa: {$korisnik["adresa"]["ulica"]} {$korisnik["adresa"]["postanski_broj"]} {$korisnik["adresa"]["grad"]}". "<br />";

    $proizvod = [
      "naziv" => "Televizor",
      "cijena" => 400,
      "porez" => 0.25
    ];

    $cijenaSaPorezom = $proizvod["cijena"] + ($proizvod["cijena"] * $proizvod["porez"]);

    echo "Ukupna cijena proizvoda {$proizvod["naziv"]} sa porezom je {$cijenaSaPorezom} EUR". "<br />";

    if (in_array("luka@example.com", $korisnik)) {
      echo "Email luka@example.com exist". "<br />";
    }
    else{
      echo "Email luka@example.com doesnt exist". "<br />";
    };

    unset($proizvod["porez"]);

    $a = [
      "ime" => "Ana",
      "prezime" => "Perić",
      "grad" => "Zagreb"
    ];

    $b = [
      "ime" => "Ana",
      "prezime" => "Perić",
      "grad" => "Split"
    ];

    $result = array_diff_assoc($b,$a);
    
    $boje = [
      "prva" => "crvena",
      "druga" => "plava",
      "treća" => "zelena"
    ];

    if (in_array("plava",$boje)){
        echo "Postoji plava". "<br />" ;
    } else {
        echo "Plava ne postoji". "<br />" ;
    };

    $racunar = [
      "procesor" => "Intel i5",
      "memorija" => "16GB",
      "disk" => "512GB SSD"
    ];

    if(array_key_exists("graficka",$racunar)){
      echo "Postoji stavka graficka". "<br />";
    }
    else{
      echo "Ne postoji stavka graficka". "<br />";
      $racunar["graficka"] = "NVIDIA GTX 1660";
    };

    if(in_array("Zagreb", $korisnik["adresa"])){
      echo "Korisnik zivi u Zagrebu". "<br />";
    } else {
      echo "Korisnik ne zivi u Zagrebu". "<br />";
    }

    $film = [
      "naslov" => "Inception",
      "godina" => 2010,
      "reziser" => "Christopher Nolan"
    ];

    unset($film["godina"]);

    $brojElemenata = count($racunar);

    echo "Racunar ima $brojElemenata elementa". "<br />";

    $igrac = [
      "ime" => "Nikola",
      "pozicija" => "Napadač",
      "broj_dresa" => 9
    ];

    $igrac["pozicija"] = "Vezni";
    echo "{$igrac["ime"]} sada igra kao {$igrac["pozicija"]}". "<br />";

    $profil = [
      "ime" => "Maja",
      "prezime" => "Perić"
    ];

    if(array_key_exists("godine", $profil)){
      echo "stavka godine vec postoji";
    }
    else {
      $profil["godine"] = 29;
    };

    $valuesIgrac = array_values($igrac);
    $keysIgrac = array_keys($igrac);

    $student = [
      "ime" => "Ivana",
      "prezime" => ""
    ];

    if(empty($student["prezime"])) {
      echo "Prezime je unjeto". "<br />";
    } else {
      echo "Prezime nije unjeto". "<br />";
    }

    unset($a["ime"], $a["grad"]);

    print_r($a);

?>