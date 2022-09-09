<?php
$servername = "localhost";
$username = "root";
$password = "";

//CREANDO LA CONEXION 
$conn = new mysqli($servername, $username, $password);

//VERIFICANDO LA CONEXION 
if ($conn->connect_error) {
    die("Fallo la conexion: " .$conn->error);
}
echo "Conexion correcta ";

//CONSULTA PARA CREAR LA BASE DE DATOS
$sql = "CREATE DATABASE dbprueba090922";

if ($conn->query($sql) === TRUE) {
    echo "Tabla creada correctamente";
}
else {
    echo "Error al crear: " .$conn->error;
}
$conn->close();
?>