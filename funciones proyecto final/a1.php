<?php

include('aut.php');

$email = $_GET['email'];
$contrasena = $_GET['contrasena'];

if (autenticar($email, $contrasena) == 1) {
    echo "Redirigiendo a a2.php";
    header("location:a2.php?email=$email&contrasena=$contrasena");
    exit;
} else {
    echo "Redirigiendo a a3.php";
    header("location:a3.php");
    exit;
}
