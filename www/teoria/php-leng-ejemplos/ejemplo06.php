<?php
function factorial ($valor){
    if ($valor < 0){
	   return -1; //Error
	}
	if ($valor == 0){
	   return 1;
	}
	if (($valor == 1)||($valor == 2)){
	   return $valor;
	}
	$ret =1;
	for ($i=2;$i<=$valor; $i++){
	    $ret = $ret * $i;
	}
     return $ret;
}

$factorial5 = factorial(5);

echo '<h3>El Factorial de 5 es: '.$factorial5.'</h3>';

?>
