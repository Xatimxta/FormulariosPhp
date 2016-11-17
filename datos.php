<?php

/* 
* Script que recoge los datos del formulario y los muestra por pantalla 
 */


// Recogemos los datos del formulario del post

$name = $_POST["nombre"];
$age = $_POST["edad"];
$city = $_POST["ciudad"];
$sex = $_POST["sexo"];

echo "<p>Datos del usuario registrado en el formulario:</p>";
echo "<p>Nombre: $name Edad: $age Ciudad: $city Sexo: $sex</p>";

