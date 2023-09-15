<?php

function clear() {

    if (PHP_OS === "WINNT") {
        system("cls");
    }
    else {
        system("clear");
    }
    
}

$possible_words = [
    "Bebida", "Prisma", "Ala", "Dolor", "Piloto", 
    "Baldosa", "Terremoto", "Asteroide", "Gallo", "Platzi",
    "Lápiz", "Azulejo", "Delfín", "Meteorito", "Paracaídas",
    "Inundación", "Horizonte", "Orquídea", "Guitarra", "Caramelo",
    "Volcán", "Muralla", "Catarata", "Hormiga", "Satélite",
    "Pergamino", "Estalactita", "Chaqueta", "Helicóptero", "Misterio",
    "Piano", "Mariposa", "Biblioteca", "Aurora", "Pendiente",
    "Galaxia", "Escultura", "Sombrero", "Renacimiento", "Espejismo",
    "Zanahoria", "Aventura", "Cristal", "Lagarto", "Elefante",
    "Cosecha", "Relámpago", "Villano", "Catedral", "Caballero",
    "Destino", "Dinamita", "Eclipse", "Fósforo", "Granizo",
    "Hidrógeno", "Isla", "Joyero", "Kilómetro", "Luminoso",
    "Máquina", "Náufrago", "Ópalo", "Páramo", "Químico",
    "Radiante", "Sinfonía", "Tóxico", "Universo", "Vértigo",
    "Xilófono", "Yacimiento", "Zodiaco", "Acuático", "Brújula",
    "Cilindro", "Década", "Esfinge", "Frontera", "Giratoria",
    "Hidraúlico", "Icono", "Jirafa", "Kraken", "Laberinto",
    "Mandrágora", "Néctar", "Órbita", "Papiro", "Quark",
    "Reptil", "Subterráneo", "Tridente", "Ufología", "Vórtice",
    "Windsurf", "Xenofobia", "Yeti", "Zafiro", "Aeródromo",
    "Biólogo", "Cúbico", "Dardos", "Estática", "Fragmento",
    "Gigante", "Hormiguero", "Insecto", "Jabalí", "Koala",
    "Láser", "Mármol", "Neurona", "Óleo", "Paquidermo",
    "Quiste", "Robótico", "Serpiente", "Titanio", "Urbe",
    "Vulcano", "Wombat", "Xenón", "Yoga", "Zapato",
    "Agronomía", "Búnker", "Cénit", "Daga", "Estirpe",
    "Flauta", "Gladiador", "Heraldo", "Índice", "Jazz",
    "Kitsch", "Licuadora", "Molusco", "Nómada", "Óxido",
    "Péndulo", "Quásar", "Rueda", "Silueta", "Tundra",
    "Utopía", "Vudú", "Whisky", "Xeroftalmia", "Yunque",
    "Zambullida", "Anatomía", "Blues", "Cifrado", "Dúplex",
    "Enigma", "Flecha", "Gnomos", "Hierro", "Ícaro"
];


define("MAX_ATTEMPS", 6);

echo "😼 ¡Juego del ahorcado! \n\n";

// Inicializamos el juegos
$choosen_word = $possible_words[ rand(0, 200) ];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discovered_letters = str_pad("", $word_length, "_");
$attempts = 0;

do {

    echo "Palabra de $word_length letras \n\n";
    echo $discovered_letters . "\n\n";

    // Pedimos al usuario que escriba
    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);

    if ( str_contains($choosen_word, $player_letter) ) {

        // Verificamos todas las ocurrencias de esta letra para reemplazarla
        $offset = 0;
        while(
            ($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false
        ) {

            $discovered_letters[$letter_position] = $player_letter;
            $offset = $letter_position + 1;

        }
        
    } 
    else {

        clear();
        $attempts++;
        echo "Letra incorrecta 😾. Te quedan " . (MAX_ATTEMPS - $attempts) . " intentos.";
        sleep(2);

    }

    clear();

} while( $attempts < MAX_ATTEMPS && $discovered_letters != $choosen_word );

clear();

if ($attempts < MAX_ATTEMPS)
    echo "¡Felicidades! Has adivinado la palabra. 🙀 \n\n";
else
    echo "Suerte para la próxima, amigo. 😾 \n\n";

echo "La palabra es: $choosen_word\n";
echo "Tú descubriste $discovered_letters";

echo "\n";