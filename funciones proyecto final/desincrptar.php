<?php
include('incriptar.php');

function registro($email)
{
    $nombre = '';
    $salida = "";
    $conexion = mysqli_connect('localhost', 'root', 'root', 'proyecto_final');

    
    if (!$conexion) {
        die("Error al conectar a la base de datos:" . mysqli_connect_error());
    }

    $sq = "SELECT contrasena FROM usuairos WHERE email='$email'";
    $resultado = mysqli_query($conexion, $sq);

    while ($fila = mysqli_fetch_array($resultado)) {
        $salida .= $fila[0];
    }


    mysqli_close($conexion);

    $nombre = desencriptar($salida);

    return $nombre;
}

echo registro('10');
