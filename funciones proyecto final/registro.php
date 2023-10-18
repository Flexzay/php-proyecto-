
<?php

include("incriptar.php");

function registro($email, $contrasena)
{
    $salida = "";
    $conexion = mysqli_connect('localhost', 'root', 'root', 'proyecto_final');

    // verificacion de conexion
    if (!$conexion) {
        die("Error al conectar a la base de datos:" . mysqli_connect_error());
    }

    /*
    $clave = encriptar($clave);
    $nombre = encriptar($nombre);
    */

    $sq = "INSERT INTO usuairos (email,contrasena) VALUES ('$email', '$contrasena')";



    // Ejecutar la consulta
    $resultado = $conexion->query($sq);

    if ($resultado) {
        $salida = "Registro exitoso";
    } else {
        $salida = "Error en el registro: " . $conexion->error;
    }

    $conexion->close();

    return $salida;
}


echo registro( " ", "");



?>

