<?php

function enlace($url = "http://www.php.net") 
{
    echo "<h3><a href='" . $url . "'>Pulsa aqu&iacute;</a></h3>";
    $x = "hola";
    echo "largo es ".rand(1,10);
} 


enlace("http://www.unsl.edu.ar");

enlace("http://www.clarin.com.ar");
enlace();
?>
