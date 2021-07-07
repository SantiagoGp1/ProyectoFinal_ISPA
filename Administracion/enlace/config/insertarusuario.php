<?php
    include_once("DBconect.php");

    if(isset($_POST['identificacion'])){

        if($_POST['identificacion'] !== ""){

            $identificacion = $_POST['identificacion'];

            $conexion = new Database;
            $resultado = $conexion->validarId($identificacion);
            $contador=$resultado->rowCount();

            if($contador > 0){
                $confirm = 3;
            } else {
                $confirm = $conexion-> insertarId ( $identificacion,);
            }
        } else {         
            $confirm = 2 ; //uno o mas campos están vacios
        }

    }
    header('Location: ../proyecto/index.php?confirm='.$confirm)
?>