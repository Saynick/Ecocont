<?php
session_start();
if (isset($_SESSION['username'])) {
  echo '
     <script>
         window.location =("Usuario.php");
      </script> 
        ';
  die();
}else
if (isset($_SESSION['administrador'])) {
    echo '
       <script>
           window.location =("pantalla_Admon.php");
        </script>
          ';
    die();
  }
?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Econcont</title>
    <link rel="stylesheet" href="css/pp1.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
</head>

<body>
        <header>
            <div class="logo-h"> <a href="index.php"><img src="img//Logo Black.png"></a> </div>
            <nav>
                <nav class="menu">
                <a href="views/comousar.php">¿Como usar Ecocont?</a>
                <a href="views/informate.php">Infórmate</a>
                <a href="views/quienes_somos.php">¿Quiénes somos?</a>
                </nav>
        </header>
    <div class="slogan">
        <h1>Por ti, por mi<span class="point">.</span> </h1>
        <h2>Por el futuro<span class="point">.</span></h2>
        <h1>¡Recicla!</h1>
    </div>
    <div class="boton">
        <h3> <a href="login_usu.php">Comenzar</a></h3>
    </div>
    <img class="logo-p" src="img/Logo Black.png">
<div class="admon">
      <a class="admon-l" href="login_admon.php"><img src="img/btn-admin.png" ></a>
      </div>
</body>

</html>