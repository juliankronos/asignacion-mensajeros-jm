<?php

$servername = "localhost";
$database = "domina";
$username = "root";
$password = "46682156";
$cedula = $_REQUEST['Cedulas'];
$nombrec = $_REQUEST['Nombrescom'];
$apellidoc = $_REQUEST['Apellidoscom'];
$cargo = $_REQUEST['Cargos'];
      

$conn = mysqli_connect($servername, $username, $password, $database);


$sql = "INSERT INTO usuarios ( USid, USnombres, USapellidos, UScargo ) VALUES ('$cedula', '$nombrec', '$apellidoc', '$cargo')";

if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>