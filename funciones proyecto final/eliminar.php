<?php


include('aut.php');

$email = $_GET['email'];

echo eliminarUsuario($email);