<?php 
session_start();
if(isset($_SESSION['administrador'])) {
    header("Location: pantalla_admon.php");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inicio sesión administrador</title>
    
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/log_admon.css">


</head>

<body>
    <div class="container-fluid ">

        <div class="row align-items-center">
            <div class="col-3" id="log">
                <div class="col-12 log-in">
                   <a href="index.php"> <img src="img/LB.png"></a>
                </div>
                <div class="form-group text-center">
                    <form class="col-12" action="php/config_login_admon.php" method="POST">
                        <div class="form-group" id="user-group">
                            <input type="text" name="usuario" class="form-control" placeholder="Administrador" required>
                        </div>
                        <div class="form-group" id="pass-group">
                            <input type="password" name="password" class="form-control" placeholder="Ingrese su contraseña" required>
                        </div>
                        <button  class="btn btn-success">Iniciar sesión</button> <br><br>
                        <h2>Administrador</h2>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>