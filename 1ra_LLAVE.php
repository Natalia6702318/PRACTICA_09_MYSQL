<?php
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="dbprueba090922";

 $conn = new  mysqli($host,$dbusername,$dbpassword,$dbname);

    if($conn-> connect_error){
        die ("fallo la conexión: <br> ". $conn->connect_error);

    }else {
        echo "conexion correcta <br>";
    }

    //sql 

    $sql="ALTER TABLE cargo ADD CONSTRAINT persona_cargo
    FOREIGN KEY (id_Persona) REFERENCES persona (id_Persona)";

    if ($conn->query ($sql)===TRUE)
    {
        echo "CLAVE CREADA CORRECTAMENTE";

    }else {
        echo "NO SE PUDO CREAR LA CLAVE  ". $conn ->error;

    }
    $conn->close ();
?>