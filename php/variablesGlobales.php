<?php
//Datos del Dueño
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$password = $_POST['password'];

//Datos de la Mascota
$nombreMascota = $_POST['nombreMascota'];
$especie = $_POST['especie'];
$raza = $_POST['raza'];
$size = strtolower($_POST['size']);

$fechaNacimiento = $_POST['fechaNacimiento'];
$sexo = strtolower($_POST['sexo']);
$vacuna = strtolower($_POST['vacuna']);
$color = $_POST['color'];
?>