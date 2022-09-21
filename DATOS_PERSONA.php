<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbprueba090922";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo "Conexión correcta";


$sql = "INSERT INTO persona(Ci, Nombre, Apellido_Paterno, Apellido_Materno)
VALUES (36987, 'Grover', 'Pereira', 'Quispe')";

if ($conn->query($sql) === TRUE) {
    echo " Tabla modifica correctamente";
  } else {
    echo "Error al modificar la tabla " . $conn->error;
  }
  
  $conn->close();
?>