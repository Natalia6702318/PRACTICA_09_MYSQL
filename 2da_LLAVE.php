<?php
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="dbprueba090922";

 $conn = new  mysqli($host,$dbusername,$dbpassword,$dbname);

    if($conn-> connect_error){
        die ("fallo la conexión ". $conn->connect_error);

    }
    else {
        echo "conexion correcta ";
    }

    //CREACION DE LA LLAVE CARGO-AREA

    $sql="ALTER TABLE cargo ADD CONSTRAINT cargo_area
    FOREIGN KEY (id_Area) REFERENCES area (id_Area)";

    if ($conn->query ($sql)===TRUE)
    {
        echo "CLAVE CREADA CORRECTAMENTE";

    }else {
        echo "NO SE PUDO CREAR LA CLAVE". $conn ->error;

    }
    $conn->close ();
?>