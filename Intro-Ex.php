<?php

    $cena = 500;
    $iznosPoreza = 0.22;
    $porez = $cena * $iznosPoreza;

    $totalnaCena = $cena + $porez;

    echo "Cena bez poreza: $cena, iznos poreza: $porez (procenat: $iznosPoreza), totalna cena: $totalnaCena";

    $proizvod = "Hleb";

    echo $proizvod;

    $proizvod .= "Sava";

    echo $proizvod;

    $cenaProizvoda = 50;
    $cenaProizvoda += 5;

    echo $cenaProizvoda;

    $cenaProizvoda++;

    echo $cenaProizvoda;
?>