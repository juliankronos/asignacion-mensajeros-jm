<?php

$servername = "localhost";
$database = "domina";
$username = "root";
$password = "46682156";
$cedulam = $_REQUEST['CedulasM'];
$nombrem = $_REQUEST['NombresM'];

      

$conn = mysqli_connect($servername, $username, $password, $database);


$sql = "INSERT INTO mensajeros ( MENced, MENnombre ) VALUES ('$cedulam', '$nombrem')";

if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>