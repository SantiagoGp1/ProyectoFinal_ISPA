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
    <title>Usuario</title>
</head>

<body class="color-background">
    <nav class="navbar" style="background-color: #e3f2fd;">
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
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuario
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="./Roles.php">Roles</a>
                    <a class="dropdown-item" href="./Usuario.php">Usuarios</a>
                    <a class="dropdown-item" href="../Proyecto/index.php">Cerrar sesi??n</a>
                </div>
            </div>
    </nav>
    <div class="d-flex justify-content-center my-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex">
                    <p>Modificar Usuario A</p>
                    <a href="./Usuario.php" class="btn btn-primary ml-auto ">Regresar</a>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="UserId">Identificaci??n</label>
                            <input required type="text" class="form-control" id="UserId" aria-describedby="IdHelp">
                        </div>
                        <div class="form-group">
                            <label for="User">Nombres</label>
                            <input required type="text" class="form-control" id="User" aria-describedby="UserHelp">
                        </div>
                        <div class="form-group">
                            <label for="User">Apellidos</label>
                            <input required type="text" class="form-control" id="User" aria-describedby="UserHelp">
                        </div>
                        <div class="form-group">
                            <label for="User">Username</label>
                            <input required type="email" class="form-control background" id="User"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="passwd">Password</label>
                            <input required type="password" class="form-control background" id="passwd"
                                aria-describedby="passwdHelp">
                        </div>
                        <label for="">Rol</label>
                        <br>
                        <select class="form-control">
                            <option>Administrador</option>
                            <option>Profesor</option>
                            <option>Estudiante</option>
                        </select>
                        <button type="submit" class="btn btn-primary my-2">Actualizar</button>
                    </form>
                </div>
            </div>



        </div>
    </div>
</body>

</html>