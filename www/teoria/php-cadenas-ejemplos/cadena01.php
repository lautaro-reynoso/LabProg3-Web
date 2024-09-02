<?php
  echo "substr('abcdef', 0, 3)<br>";
  $str = substr('abcdef', 0, 3);
  echo "EL substring de long. 3 a partir de la posicion 2 es:  $str <br><br>";
  echo "substr('abcdef', -2) <br>";
  $str = substr('abcdef', -2);
  echo "EL substring a partir de la posicion 2  desde la derecha es: $str<br><br>";
  echo "substr('abcdef', -2, 1)<br>";
  $str = substr('abcdef', -2, 1);
  echo "EL substring a partir de la posicion 2  desde la derecha es: $str <br><br>";
  echo "substr('abcdef', 1, -2)<br>";
  $str = substr('abcdef', 1, -2);
  echo "EL substring a partir de la posicion 1 y hasta la posicion 2 desde la derecha es: $str <br><br>";
?>