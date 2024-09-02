<?php
  echo "strpos('cadena de prueba', 'de') <br>";
  $i = strpos('cadena de prueba', 'de');
  echo "La posicion de: de en: cadena de prueba es: $i <br><br>";
  echo "strpos('cadena de prueba', 'de', 5) <br>";
  $i = strpos('cadena de prueba', 'de', 5);
  echo "La posicion de: de en: cadena de prueba despues de la 5 posición es : $i <br><br>";
  echo "strrpos('cadena de prueba', 'de')<br>";
  $s = strrpos('cadena de prueba', 'de');
  echo "La posicion de: de en: cadena de prueba es : $s <br><br>";
  echo "strstr('cadena de prueba', 'de')<br>";
  $s = strstr('cadena de prueba', 'de');
  echo "La cadena despues de la primera ocurrencia de: de en: cadena de prueba es : $s <br>";
?>
