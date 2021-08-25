<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inicio sesión usuario</title>
    <link rel="stylesheet" href="css/log_usu.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


</head>

<body>
    <div class="container-fluid ">
        <nav>
            <div class="logo">
                <a href=""></a>
                
            </div>
        </nav>
        <div class="row align-items-center">
            <div class="col-3" id="log">
                <div class="col-12 log-in">
                    <a href="index.php"><img src="img/LB.png"></a>
                </div>
                <div class="form-group text-center">
                    <form class="col-12" action="php/config_login_login.php" method="POST">
                        <div class="form-group" id="user-group">
                            <input type="text" name="user" class="form-control"
                                placeholder="Usuario" required>
                        </div>
                        <div class="form-group" id="pass-group">
                            <input type="password" name="pass" class="form-control"
                                placeholder="Ingrese su contraseña" required>
                        </div>
                        <button  class="btn btn-primary">Iniciar sesión</button>
                         <h2>Usuario</h2>                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>