<?php
    include_once("DBconect.php");

    if(isset($_POST['identificacion'])){

        if($_POST['identificacion'] !== ""){

            $identificacion = $_POST['identificacion'];
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            

            $conexion = new Database;
            $resultado = $conexion->validarId($identificacion, $username);
            $contador=$resultado->rowCount();

            if($contador > 0){
                $confirm = 3;
            } else {
                $confirm = $conexion-> insertarId($identificacion, $nombres, $apellidos, $username, $password);
            }
        } else {         
            $confirm = 2 ; //uno o mas campos están vacios
        }
        if ($_POST['username'] ==="passwordConfirm" ){
            
        }

    }
    header('Location: ../../../Proyecto/index.php?confirm='.$confirm)
    
?>