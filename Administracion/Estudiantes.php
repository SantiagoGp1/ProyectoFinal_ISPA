<?php

include_once('./enlace/config/DBconect.php');
$conexion=new Database;
$resultado=$conexion->datosestudiantes();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styless.css" />
  <title>Listado de estudiantes A</title>
</head>

<body class="color-background">
  <nav class="navbar navbar-default" style="background-color: #e3f2fd;">
    <!-- Navbar content -->
    <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Estudiantes
      </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <a class="dropdown-item" href="./Estudiantes.php">Ver estudiantes</a>
        <a class="dropdown-item" href="./Materia.php">Materias</a>
        <a class="dropdown-item" href="./Archivos.php">Archivos</a>
      </div>
    </div>
    <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Usuario
      </button>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
        <a class="dropdown-item" href="./Roles.php">Roles</a>
        <a class="dropdown-item" href="./Usuario.php">Usuarios</a>
        <a class="dropdown-item" href="../Proyecto/index.php">Cerrar sesión</a>
      </div>
    </div>
  </nav>

  <!--Materias-->
  <div class=" d-flex justify-content-center my-5">
    <div class="col-md-15">
      <div class="card">
        <div class="card-header d-flex">
          <h5>Listado de Estudiantes</h5>
          <a href="./Creacion_de_estudiante.php" class="btn btn-primary ml-auto">Crear Estudiante</a>

          <!--enlasar con  creacion de Estudiantes-->

         
          

        </div>
        <div class="card-body">
          <div class="alert alert-success" role="alert">
            no se ha podido realizar el comando
          </div>

          <div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Identificación</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellidos</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Herramientas</th>
                </tr>
              </thead>
              <tbody>
              <?php
        foreach($resultado as $fila){
            echo "<tr>
                <td>".$fila['id']."</td>
                <td>".$fila['identificacion']."</td>
                <td>".$fila['nombres']."</td>
                <td>".$fila['apellidos']."</td>
                <td>".$fila['email']."</td>
                <td>".$fila['telefono']."</td>
                <td></td>
            </tr>";
        }
    ?>
              </tbody>
          </div>
          </table>
        </div>
      </div>

    </div>
  </div>

  <a href="./Creacion_de_materia.php"></a>
</body>

</html>