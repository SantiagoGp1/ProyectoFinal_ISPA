<?php
    include_once("DBconect.php");

    if(isset($_POST['identificacion']) && isset($_POST['nombres']) && isset($_POST['apellidos']) 
        && isset($_POST['email']) && isset($_POST['telefono'])){

        if($_POST['identificacion'] !== "" && $_POST['nombres'] !== "" && $_POST['apellidos'] !== "" 
            && $_POST['email'] !== "" && $_POST['telefono'] !== "" ){

            $identificacion = $_POST['identificacion']; 
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];

            $conexion = new Database;
            $resultado = $conexion->validaridentificacion( $identificacion);
            $contador=$resultado->rowCount();

            if($contador > 0){
                $confirm = 3;
            } else {
                $confirm = $conexion->Insertar($identificacion, $nombres, $apellidos, $email, $telefono);
            }
        } else {         
            $confirm = 2 ; //uno o mas campos están vacios
        }

    }
    header('Location: ../../Creacion_de_estudiante.php?confirm='.$confirm)
?>