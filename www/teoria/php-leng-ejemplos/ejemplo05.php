<?php
$var1 = 1;
$var2 = 2;
if($var1 = $var2)
{
    echo "<h3>iguales</h3>";
}
else
{
    echo "<h2>distintas</h2>";
}

$var1 = 1;
$var2 = 2;
$var3 = 2;
$r = ($var1 = $var2) + $var3;

echo $r;

?>
