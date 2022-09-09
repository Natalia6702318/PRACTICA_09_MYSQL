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
$sql = "CREATE TABLE comisiones(
    id_Comision INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Monto INT(12) NOT NULL,
    Concepto VARCHAR(20),
    Fecha_Comision DATE,
    id_Persona INT(12) UNSIGNED
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabla creada correctamente";
} 
else {
  echo "Error al crear la tabla: " . $conn->error;
}

$conn->close();
?>