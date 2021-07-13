<?php
    include_once("DBconect.php");

    if(isset($_POST['nombre'])){

        if($_POST['nombre'] !== ""){

            $nombre = $_POST['nombre'];

            $conexion = new Database;
            $resultado = $conexion->validarnombre($nombre);
            $contador=$resultado->rowCount();

            if($contador > 0){
                $confirm = 3;
            } else {
                $confirm = $conexion-> insertarmateria( $nombre);
            }
        } else {         
            $confirm = 2 ; //uno o mas campos están vacios
        }

    }
    header('Location: ../../Creacion_de_materia.php?confirm='.$confirm)
?>