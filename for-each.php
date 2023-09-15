<?php

$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

foreach ($tiendita_de_cafes as $cafe => $price)
    echo "El café $cafe cuesta $$price USD \n";


echo "\n";

foreach ($tiendita_de_cafes as $cafe => $price){

    if($cafe == "Mocca"){
        echo "!We Find Latte" . "And the price is $price \n";
        break;
    }

}

foreach ($tiendita_de_cafes as $cafe => $price){

    if($cafe == "Latte")
        continue;
    
    echo "El cafe $cafe es muy rico \n";
}
echo "\n";