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
    <title>Notas E</title>
</head>
<body class="color-baackground">
    <nav class="navbar" style="background-color: #e3f2fd;">
        <!-- Navbar content -->
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Mi Información
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <a class="dropdown-item" href="./Notas.php">Notas</a>
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
      <div class=" d-flex justify-content-center my-5">
         <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex">
                    <h6>Mis notas Usuario</h6>
                    
                </div><br>
                <table class="table">
                    <thead>
                      <tr>
                        <div class="alert alert-success mx-3" role="alert">
                            No se pudo realizar la accion, comunicate con el administrador
                        </div> 
                        <th scope="col">Materia</th>
                        <th scope="col">Nota 1</th>
                        <th scope="col">Nota 2</th>
                        <th scope="col">Nota 3</th>
                        <th scope="col">Observaciones</th>
                      </tr>
                    </thead>
                  </table>
                  
</body>
</html>