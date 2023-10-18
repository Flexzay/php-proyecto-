<?php
function autenticar($email, $contrasena)
{
    $salida = 0;
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'proyecto_final');
    $sq = "SELECT COUNT(email) FROM usuairos WHERE email = '$email' AND contrasena = '$contrasena'";

    $resultado = $conexion->query($sq);

    $conexion->close();


    $fila = mysqli_fetch_array($resultado);
    $salida = $fila[0];
    return $salida;
}
function mostrar($email)
{
    $salida = '';
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'proyecto_final');
    $sq = "SELECT * FROM usuairos WHERE email = '$email'";
    $resultado = $conexion->query($sq);

    while ($fila = mysqli_fetch_array($resultado)) {
        $salida .= $fila[0] . '<br>';
        $salida .= $fila[1] . '<br>';
        $salida .= '<br>';
    }

    $conexion->close();

    return $salida;
}


function mostrarcv($email)
{
    $salida = '';
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'proyecto_final');

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Escapar la entrada del usuario para evitar inyección SQL
    $email = mysqli_real_escape_string($conexion, $email);

    // Encerrar el correo electrónico entre comillas simples en la consulta SQL
    $sq = "SELECT * FROM perfil WHERE email = '$email'";
    $resultado = $conexion->query($sq);

    while ($fila = mysqli_fetch_array($resultado)) {
        $salida .= $fila[0] . '<br>';
        $salida .= $fila[1] . '<br>';
        $salida .= $fila[2] . '<br>';
        $salida .= $fila[3] . '<br>';
        $salida .= $fila[4] . '<br>';
        $salida .= '<br>';
    }

    $conexion->close();

    return $salida;
}



function eliminarUsuario($email)
{
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'proyecto_final');

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Escapar la entrada del usuario para evitar inyección SQL
    $email = mysqli_real_escape_string($conexion, $email);

    // Consulta SQL para eliminar usuario
    $sql = "DELETE FROM usuairos WHERE email = '$email'";

    if ($conexion->query($sql)) {
        $resultado = "Usuario eliminado correctamente.";
    } else {
        $resultado = "Error al eliminar usuario: " . $conexion->error;
    }

    $conexion->close();

    return $resultado;
}

