<?php

$servername = "localhost";
$database = "domina";
$username = "root";
$password = "46682156";
$usuario = $_REQUEST['Usuarios'] ;
$sede = $_REQUEST['Sedes'];
$ciudad = $_REQUEST['Ciudades'];
$mensajero = $_REQUEST['Mensajeros'];
$vehiculo = $_REQUEST['Vehiculos'];
$placa = $_REQUEST['Placa'];
$cliente = $_REQUEST['Clientes'];
$guia = $_REQUEST['Guias'];


      

$conn = mysqli_connect($servername, $username, $password, $database);


$sql = "INSERT INTO asignacion ( USUARIO, SEDE, CIUDAD, MENSAJERO, VEHICULO, PLACA, CLIENTE, GUIA ) VALUES ('$usuario', '$sede', '$ciudad', '$mensajero', '$vehiculo', '$placa', '$cliente', '$guia')";

if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>