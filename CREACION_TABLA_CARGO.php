<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbprueba090922";

// Creando la conexion
$conn = new mysqli($servername, $username, $password,$dbname);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo "Conexión correcta";

// SQL para crear las tablas
$sql = "CREATE TABLE cargo(
    id_Cargo INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Cargo VARCHAR(12),
    Sueldo DECIMAL(10),
    id_Persona INT(6) UNSIGNED,
    id_Area INT(6) UNSIGNED
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabla creada correctamente";
} else {
  echo "Error al crear la tabla: " . $conn->error;
}

$conn->close();
?>