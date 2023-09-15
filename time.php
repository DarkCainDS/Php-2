<?php
function obtener_hora() {
    date_default_timezone_set("America/Santiago");
    return date("h:i A");
  }
  
  echo "Hola, me podrias decir que hora es? \n";
  echo "Claro, son las ". obtener_hora();
  //https://www.php.net/manual/en/datetime.format.php