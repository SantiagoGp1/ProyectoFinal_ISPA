<?php 
 include_once ("./DBconect.php");
    if (isset($_POST['nombres']) && isset($_POST['id'])){
        $id= $_POST [ 'id'];
        $nombre= $_POST [ 'nombres'];

        $conexion = new Database;
        $confirm = $conexion-> updateMateria($id,$nombre);
    }
    header("Location: ../../Creacion_de_materia.php?confirm=". $confirm)
    
?>