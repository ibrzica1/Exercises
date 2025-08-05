<?php

    $auti = ["Bmw", "Mercedes", "Audi"];

    array_push($auti, "Zastava");

    echo "$auti[3], $auti[1], $auti[2], $auti[0]";

    $brojAuta = count($auti);

    echo "Ukupno imamo $brojAuta automobila.";
    echo var_dump($auti);

    $patike = ["Reebok", "Adidas", "Nike"];
    sort($patike);

    echo var_dump($patike);

    array_shift($patike);

    echo var_dump($patike);

    $products = ["pc", "monitor", "keyboard"];
    unset($products[1]);

    $productsAndCars = [];
    array_push($productsAndCars, $auti, $products);

    echo var_dump($productsAndCars);

?>