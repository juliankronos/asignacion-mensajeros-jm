<?php

$servername = "localhost";
$database = "domina";
$username = "root";
$password = "46682156";
$cedulaa = $_REQUEST['Cedulasa'];
$nombreca = $_REQUEST['Nombresa'];
$apellidoca = $_REQUEST['Apellidosa'];
$telefono = $_REQUEST['Telefonos'];
$edad = $_REQUEST['Edades'];
      

$conn = mysqli_connect($servername, $username, $password, $database);


$sql = "INSERT INTO clientes ( Ced, Clinombres, Cliapellidos, Clitelefono, Cliedad ) VALUES ('$cedulaa', '$nombreca', '$apellidoca', '$telefono', '$edad')";

if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>