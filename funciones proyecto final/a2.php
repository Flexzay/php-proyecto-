<?php

include('aut.php');


$email = $_GET['email'];


echo mostrar($email);
echo "<a href='mostrarcv.php?email=$email'>MOSTRAR CV</a>";
echo "<a href='eliminar.php?email=$email'>Eliminar Usuario</a>";
?>
