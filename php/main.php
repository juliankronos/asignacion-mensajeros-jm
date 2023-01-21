<?php

$servername = "localhost";
$database = "domina";
$username = "root";
$password = "46682156";
$sede = $_REQUEST['Sedes'];
$ciudad = $_REQUEST['Ciudades'];
$mensajero = $_REQUEST['Mensajeros'];
$guia = $_REQUEST['Guias'];


      

$conn = mysqli_connect($servername, $username, $password, $database);


$sql = "INSERT INTO asignacion ( SEDE, CIUDAD, MENSAJERO, GUIA ) VALUES ('$sede', '$ciudad', '$mensajero' , '$guia')";

if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>