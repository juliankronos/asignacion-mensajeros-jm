<?php

$servername = "localhost";
$database = "domina";
$username = "root";
$password = "46682156";
$sede = isset($_POST['Sedes']);
    
      

$conn = mysqli_connect($servername, $username, $password, $database);


$sql = "INSERT INTO asignacion ( SEDE, CIUDAD, MENSAJERO, GUIA ) VALUES ('$sede', 'paipa', 'wilson' , '1')";

if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>