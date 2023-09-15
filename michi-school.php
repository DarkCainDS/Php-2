<?php
$escuela = array(
    array(
        "Nombre" => "michi1",
        "Ocupacion" => "Developer Java",
        "Color" => "Negro",
        "Comidas" => array(
            "Favoritas" => "lasaña",
            "noFavoritas" => "aguacate"
        )
    ),
    array(
        "Nombre" => "michi2",
        "Ocupacion" => "Developer JavaScript",
        "Color" => "Blue",
        "Comidas" => array(
            "Favoritas" => "Niku",
            "noFavoritas" => "Veggies"
        )
     ),
     array(
        "Nombre" => "michi3",
        "Ocupacion" => "Developer Python",
        "Color" => "Naranja",
        "Comidas" => array(
            "Favoritas" => "Fish",
            "noFavoritas" => "Beer"
        )
     ),
);

$michisancio = $escuela[1];

echo "Las comidas favoritas de Michisancio son " . $michisancio['Comidas']['Favoritas'] . " y se dedica ". $michisancio['Ocupacion'] . "\n";

$mr_michi = $escuela[0];
echo "El color de Mr. Michi es " . $mr_michi["Color"];

echo "\n";