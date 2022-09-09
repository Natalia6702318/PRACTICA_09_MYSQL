<?php
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="dbprueba090922";

 $conn = new  mysqli($host,$dbusername,$dbpassword,$dbname);

    if($conn-> connect_error){
        die ("fallo la conexión " .$conn->connect_error);

    }
    else {
        echo "conexion correcta ";
    }

    //CREACION DE LA LLAVE PERSONA-COMISION

    $sql="ALTER TABLE comisiones ADD CONSTRAINT persona_comisiones
    FOREIGN KEY (id_Persona) REFERENCES persona (id_Persona)";

    if ($conn->query ($sql)===TRUE)
    {
        echo "CLAVE CREADA CORRECTAMENTE";

    }
    else {
        echo "NO SE PUDO CREAR LA CLAVE" .$conn ->error;

    }
    $conn->close ();
?>