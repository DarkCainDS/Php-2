<?php

function sayHello(){
    $random_number = rand(1,8);
    $greets = "";
    switch($random_number){
        case 1:
            echo "never stop learning";
            break;
        case 2:
            echo "night on fire";
            break;
        case 3:
            echo "coding ...";
            break;
        case 4:
            echo "HI DUDEEEE";
            break;
        case 5:
            echo "Try Again";
            break;
        case 6:      
            echo "never stop learning";
            break;  
        case 7:
            echo "never stop playing";
            break;
    }
    return $greets;
}
for($z = 0 ; $z < 10; $z++){
    echo sayHello() . "\n";
};
