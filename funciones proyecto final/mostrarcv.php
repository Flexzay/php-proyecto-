<?php
include('aut.php');

if (isset($_GET['email'])) {
    $email = $_GET['email'];
    echo mostrarcv($email);
} else {
    echo "El parámetro 'email' no está presente en la URL.";
}
