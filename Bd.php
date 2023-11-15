<?php

$modelo=$_POST['modelo'];
$año=$_POST['año'];
$Pieza_Motor=$_POST['Pieza_Motor'];
$Pieza_Chasis=$_POST['Pieza_Chasis'];
$Pieza_Iluminacion=$_POST['Pieza_Iluminacion'];
$Pieza_Suspension=$_POST['Pieza_Suspension'];
$Fluidos=$_POST['Fluidos'];
$Accesorios=$_POST['Accesorios'];


$servername = "localhost";
$username = "id21329878_rodolfo";
$password = "180722Ka!";
$dbname = "id21329878_login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO usuarios (modelo, año, Pieza_Motor, Pieza_Chasis, Pieza_Suspension, Pieza_Iluminacion, Fluidos, Accesorios)
VALUES ('modelo', 'año', 'Pieza_Motor', 'Pieza_Chasis', 'Pieza_Iluminacion', 'Pieza_Suspension', 'Fluidos', 'Accesorios')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>