<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diosam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/docs.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,700&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <a class="navbar-brand" href="#">
                        <img src="../IMG/logoDS.png" alt="Bootstrap" width="100" height="80">
                        <span class="texto">Diosam</span>
                    </a>
                </div>
        <div class="contenido">
            <ul>
        <li><a href="#">Menú</a></li>
        <li><a href="vista/DOCS/galeria.php">Galeria</a></li>
        <li><a href="#">Conócenos</a></li>
        <li><a href="#">Visítanos</a></li>
            </ul>
        </div>  
            </div>
        </div>
    </header>
    <form  action="../../controlador/procesar_form.php" method="post" class="login-form">
        <h2>Login</h2>
        <div class="form-floating mb-3">
            <input  type="email" class="form-control" name="email_user" id="email_user" placeholder="name@example.com" required="required">
            <label for="floatingInput">Correo Electrónico</label>
        </div>
        <div class="form-floating mb-3">
        <input type="password" class="form-control" id="password_user" placeholder="Password" name="password_user" required="required">
            <label for="floatingPassword">Contraseña</label>
        </div>
        <div class="button-danger">
            <button type="button" class="btn btn-danger">Ingresar</button>
        </div>
        <br>
        <br>
        <div class="button-pss">
            <button type="button" class="btn btn-outline-secondary">¿Olvidó su contraseña?</button>
        </div>
        <div class="button-rgt">
            <button type="button" class="btn"><a href="registrarse.php">¿No tienes cuenta? Regístrate</a></button>
        </div>
    </form>
</body>









<footer>
    <div class="contenido">
        <ul>
            <li>Información de contacto:</li>
            <li>Teléfono: 123-456-789</li>
            <li>Correo: info@example.com</li>
            <li>Dirección: Calle Principal, Ciudad</li>
        </ul>
    </div>
  </footer>
</html>

</html>
