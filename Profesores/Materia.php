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
  
  <title>Listado de Materias P</title>
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
        <a class="dropdown-item" href="./Materia.php ">Materias</a>
        <a class="dropdown-item" href="./Archivos.php">Archivos</a>
      </div>
    </div>
    <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Usuario
      </button>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
        <a class="dropdown-item" href="../Proyecto/index.php">Cerrar sesión</a>
      </div>
    </div>
  </nav>

  <!--Materias-->
  <div class=" d-flex justify-content-center my-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header d-flex">
          <h5>Listado de Materias</h5>
          <a href="./Creacion_de_materia.php" class="btn btn-primary ml-auto">Crear Materias</a>


          <!--enlasar con  creacion de materias-->
        </div>
        <div class="card-body">
          <div class="alert alert-success" role="alert"></div>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">herramientas</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>matematicas</td>
                <td>
                  <button type="button" class="btn btn-primary">modificar</button><button type="button" class="btn btn-danger">eliminar</button>
                </td>
                
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>ciencias</td>
                <td>
                    <button type="button" class="btn btn-primary">modificar</button><button type="button" class="btn btn-danger">eliminar</button>
                  </td>
                
              </tr>
              <tr>
                  <th scope="row">3</th>
                  <td>estadistica</td> 
                  <td>
                      <button type="button" class="btn btn-primary">modificar</button><button type="button" class="btn btn-danger">eliminar</button>  
                  </td>
          
              </tr>
                  
                  
                
              
            </tbody>
          </table>
        </div>
      </div>
  </div>
</body>

</html>