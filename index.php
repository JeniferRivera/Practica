<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=o-width, initial-scale=1.0">
        <title>Mi Practica</title>
    </head>
    <body>
        <h1> FORMULARIO DE PRACTICA</h1>
        <form action="#" method="get">
            <label> Escriba el numero </label><br><br>
            <input type="number" name="numero"><br><br>
            <button type="submit">Enviar</button> <br>
        </form>
    </body>
</html>


<?php 
// Instruccion si no hay nada enviado atravez de mi formulario no ejecuto este codigo
if (isset($_GET["numero"])) {
    $numero = intval($_GET["numero"]);
    //Escribo el valor de mi variable
    echo "El numero es: $numero <br><br>";
    // compara si mi variable es mayor que cero
    if ($numero > 0) { 
        //Escribo que mi variable es mayor que cero
        echo "El numero es mayor que cero <br>"; 
    // Comparo mi variable si es igual a cero
    }elseif ($numero === 0) {
        // Escribo que mi variable es igual a cero
        echo "El numero es igual a cero <br>";
    //Si mi variable no es mayor a cero ni igual a cero entonces es menor que cero
    }else {
        //Escribo que mi variable es menor que cero
        echo "El numero es menor que cero <br>";
    }
//  condicion para cuando no se ha envado nada desde mi formulario  
} else {
    echo "Todavia no as enviado un numero";
}
// Defino mi variable y le almaceno el valor que viene de mi formulario, convertido a entero


// Ejemplo de codigo utilizando solo php
// $num = -2;
// echo "El numero es: $num <br>";

// if ($num > 0) {
//     echo "El numero es mayor que cero";   
// }elseif ($num === 0){
//     echo "El numero es igual a cero";
// }else {
//     echo "El numero es menor que cero";  
// }

?>

// Recuerda siempre manejar las verciones con git



