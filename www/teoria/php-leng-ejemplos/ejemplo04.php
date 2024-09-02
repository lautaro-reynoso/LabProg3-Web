<html>

<head>
    <style>
        body {
            background-color: linen;
        }
    </style>
</head>

<body>

    <?php

    print("Hola mundo<br>");


    print "print() también funciona sin paréntesis.";



    $cad = 'A esta cadena ';
    $cad = $cad . 'le vamos a añadir más texto.';

    echo '<h3>$cad = \'A esta cadena \';</h3><h3>$cad = $cad . ‘le vamos a añadir más texto.’;</h3>';
    echo '<h3>echo "$cad";</h3>';
    echo "<h3>$cad</h3>";


    define("SALUDO", "Hola, mundo!");
    echo '<h3>define("SALUDO", "Hola, mundo!");</h3>';
    echo "La constante SALUDO vale " . SALUDO;

    $MiArray[0] = 1;
    $MiArray[1] = "hola!!";
    $MiArray[5] = "todo bien?";
    $MiArray[] = 3;

    echo '<h3>$MiArray[0] = 1</h3>';
    echo '<h3>$MiArray[1] = "hola!!"</h3>';
    echo '<h3>$MiArray[5] = "todo bien?";</h3>';
    echo '<h3>$MiArray[] = 3</h3><hr>';

    echo "<h3>$MiArray[6] -> " . $MiArray[6] . '</h3><hr>';  // 3
    echo "<h3>$MiArray[2] -> " . $MiArray[2] . '</h3><hr>';  // 3

    echo '<h3>$MiArray["nombre"] = "Juan"</h3>';

    $MiArray["nombre"] = "Juan";
    echo '<h3>$MiArray[0] -> ' . $MiArray[0] . '</h3>';         // 1
    echo '<h3>$MiArray["nombre"] -> ' . $MiArray["nombre"] . '<hr>'; // Juan

    echo '<h3>$MiOtroArray[1]["pepe"][4] = "3 dimensiones!"</h3>';

    $MiOtroArray[1]["pepe"][4] = "3 dimensiones!";

    echo '<h3>$MiOtroArray[1]["pepe"][4] -> ' . $MiOtroArray[1]["pepe"][4] . '</h3><hr>';

    echo '<h3>$OtroArrayMas = array( 1, "hola", 5)</h3>';
    $OtroArrayMas = array(1, "hola", 5);

    echo '<h3>$OtroArrayMas[0] -> ' . $OtroArrayMas[0] . '</h3>';
    echo '<h3>$OtroArrayMas[1] -> ' . $OtroArrayMas[1] . '</h3>';
    echo '<h3>$OtroArrayMas[2] -> ' . $OtroArrayMas[2] . '</h3><hr>';

    $YOtroArray = array(
        0 => 1,
        1 => "hola",
        2 => 5,
        3 => 8,
        "nombre" => "Juan"
    );
    echo '<h3>$YOtroArray = array(
    0 => 1,
    1 => "hola",
    2 => 5,
    3 => 8,
    "nombre" => "Juan"
)</h3><hr>';

    $cad = 'A esta cadena';
    $cad2 = "Tercer caracter de \$cad: $cad[2]";
    echo $cad2;

    ?>
</body>

</html>