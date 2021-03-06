<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <link rel="stylesheet" href="../styless.css" />
  

  <title>Proyecto final ISPA</title>

<body class="color-background">

  <div>
    <div class="d-flex justify-content-center">
      <div class="col-md-5 border p-4 my-5 bg-white">
        <div class="card">
          <div class="card-header">
            <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-login-list" data-toggle="list" href="#list-login" role="tab" aria-controls="login">Login</a>
              <a class="list-group-item list-group-item-action" id="list-register-list" data-toggle="list" href="#list-register" role="tab" aria-controls="register">Register</a>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-login" role="tabpanel" aria-labelledby="list-login-list">

                <form>
                  <div class="form-group">
                    <label for="user">Correo Electrónico</label>
                    <input required type="text" class="form-control background" id="user" aria-describedby="userHelp">
                    <small id="userHelp" class="form-text text-muted"> Nunca compartiremos su correo electrónico.</small>
                    <div class="form-group">
                      <label for="passwd">Contraseña</label>
                      <input required type="password" class="form-control background" id="passwd" aria-describedby="passwdHelp">

                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-50%">Ingresar</button>
                </form>
              </div>
              <div class="tab-pane fade" id="list-register" role="tabpanel" aria-labelledby="list-register-list">
                <?php

                if (isset($_GET['confirm'])) {
                  if ($_GET['confirm'] === "0") {
                    echo '<div class="alert alert-danger" role="alert">Usuario no ingresado</div>';
                  }
                  if ($_GET['confirm'] === "1") {
                    echo '<div class="alert alert-success" role="alert">Usuario ingresado correctamente.</div>';
                  }
                  if ($_GET['confirm'] === "2") {
                    echo '<div class="alert alert-danger" role="alert">Uno o mas campos estan vacios</div>';
                  }
                  if ($_GET['confirm'] === "3") {
                    echo '<div class="alert alert-danger" role="alert">Usuario ya registrado</div>';
                  }
                }

                ?>
                <form action="../Administracion/enlace/config/insertarusuario.php" method="POST">
                  <div class="form-group">
                    <label for="UserId">Identificación</label>
                    <input required type="text" class="form-control" id="identificacion" name="identificacion" aria-describedby="IdHelp">
                  </div>
                  <div class="form-group">
                    <label for="User">Nombres</label>
                    <input required type="text" class="form-control" id="nombres" name="nombres" aria-describedby="UserHelp">
                  </div>
                  <div class="form-group">
                    <label for="User">Apellidos</label>
                    <input required type="text" class="form-control" id="apellidos" name="apellidos" aria-describedby="UserHelp">
                  </div>
                  <div class="form-group">
                    <label for="User">Correo electrónico</label>
                    <input required type="email" class="form-control background" id="username" name="username" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electronico con nadie mas.</small>
                  </div>
                  <div class="form-group">
                    <label for="passwd">Contraseña</label>
                    <input required type="password" class="form-control background" id="password" name="password" aria-describedby="passwdHelp">
                  </div>
                  <div class="form-group">
                    <label for="passwdConfirm">Confirmar contraseña</label>
                    <input required type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" aria-describedby="passwdConfirmHelp">
                  </div>
                  <button type="submit" class="btn btn-primary btn-50%">Register</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>