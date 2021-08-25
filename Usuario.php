<?php
session_start();
if (!isset($_SESSION['username'])) {
  echo '
     <script>
         alert("Por favor debe autentificarse.");
         window.location =("index.php");
      </script>
        ';
  die();
}
?> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Usuario</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/Estilos2.css">
	<link rel="stylesheet" type="text/css" href="css/Barra.css">
	
</head>
<body>
<header>
        <div class="titulo"> <img src="imag/LB.png"> </div>
        <nav class="menu">
            <a href="views/comousar.php">¿Cómo usar EcoCont?</a>
            <a href="views/informate.php">Infórmate</a>
            <a href="php/cerrar_Sesion_usu.php">Cerrar Sesión</a>
        </nav>
    </header>
<div class="contenedor">
          <div class="progreso pro-1">
              <div class="circle circle1">
              </div>
                <?php
           
                // barra de progreso
                $_SESSION['bot']=10;        //variable principal
                //calculos
                $_SESSION['tot']=10;
                $_SESSION['por']=($_SESSION['bot']/$_SESSION['tot'])*100;
                $_SESSION['val']=($_SESSION['por']*180)/100;
                $_SESSION['sum']=-135+$_SESSION['val'];
                if ($_SESSION['por']==100) {
                  $_SESSION["pre1"]= "";
                  
                }
                if ($_SESSION['por']>=100) {
                $_SESSION['sum']=45;
                $_SESSION['po']=100;
                echo "<h1>".(int)$_SESSION['po']."%</h1>";
                }else{
                echo "<h1>".(int)$_SESSION['por']."%</h1>";
                }
              	?>           
            <h2>NIVEL BÁSICO</h2>
          </div>
          <style type="text/css">
            @keyframes rotar1{ 100%{ transform: rotate(<?php echo $_SESSION['sum']."deg";?>); } }          
          </style>
      </div>
    <div class="contenedor">
        <div class="progreso pro-2">
            <div class="circle circle2"></div>
                <?php
                $_SESSION['bot'];
                $_SESSION['tot2']=20;
                $_SESSION['por2']=($_SESSION['bot']/$_SESSION['tot2'])*100;
                $_SESSION['val2']=($_SESSION['por2']*180)/100;
                $_SESSION['sum2']=-135+$_SESSION['val2'];
                 if ($_SESSION['por2']>=100) {
                $_SESSION['sum2']=45;
                $_SESSION['po2']=100;
                echo "<h1>".(int)$_SESSION['po2']."%</h1>";
                }else{
                echo "<h1>".(int)$_SESSION['por2']."%</h1>";
                }
                ?> 
            <h2>NIVEL MEDIO</h2>
            <style type="text/css">
            @keyframes rotar2{ 100%{ transform: rotate(<?php echo $_SESSION['sum2']."deg";?>); } }  
            </style>
        </div>
    </div>
    <div class="contenedor">
        <div class="progreso pro-3">
            <div class="circle circle3"></div>
                <?php
                $_SESSION['bot'];
                $_SESSION['tot3']=30;
                $_SESSION['por3']=($_SESSION['bot']/$_SESSION['tot3'])*100;
                $_SESSION['val3']=($_SESSION['por3']*180)/100;
                $_SESSION['sum3']=-135+$_SESSION['val3'];
                 if ($_SESSION['por3']>=100) {
                $_SESSION['sum3']=45;
                $_SESSION['po3']=100;
                echo "<h1>".(int)$_SESSION['po3']."%</h1>";
                }else{
                echo "<h1>".(int)$_SESSION['por3']."%</h1>";
                }
                ?>  
            <h2>NIVEL AVANZADO</h2>
        </div>
        <style type="text/css">
          @keyframes rotar3{ 100%{ transform: rotate(<?php echo $_SESSION['sum3']."deg";?>); } }
        </style>
    </div>
        <div id="cop">
         
          <a href="qr.php"><img src="imag/c1.png" height="90" width="90"></a>
          <h1 id="l1">¡Premio Disponible!</h1>
        </div>
        <div id="d1">
          <h1 id="l2"> ACUMULA 10 BOTELLAS<br><br>¡ Gana una Bolsa Ecológica<br>de EcoCont !
            <br><br>AVANCE:<br></h1>
            <?php 
            if ($_SESSION['por']>=100){
              echo "<h1>".$_SESSION["tot"]."/10</h1>";
            }else{
              echo "<h1>".$_SESSION["bot"]."/10</h1>";
            } 
             ?>
        </div>
       
        <div id="d2">
          <h1 id="l2"> ACUMULA 20 BOTELLAS<br><br>¡ Gana un Termo Oficial<br>de EcoCont !
            <br><br>AVANCE:<br></h1>
            <?php 
            if ($_SESSION['por2']>=100){
              echo "<h1>".$_SESSION["tot2"]."/20</h1>";
            }else{
              echo "<h1>".$_SESSION["bot"]."/20</h1>";
            } 
             ?>
        </div>
          <div id="d3">
          <h1 id="l2"> ACUMULA 30 BOTELLAS<br><br>¡ Gana un punto de activi-<br>dad Complementaria !
            <br><br>AVANCE:<br></h1>
            <?php 
            if ($_SESSION['por3']>=100){
              echo "<h1>".$_SESSION["tot3"]."/30</h1>";
            }else{
              echo "<h1>".$_SESSION["bot"]."/30</h1>";
            } 
             ?>
        </div>
        <div id="d4">
          <nav id="na">
           <a href="php/actualizar.php">ACTUALIZAR</a></li>
          </nav>
        </div>
        <div id="d5">
          <?php
          $_SESSION["username"]=strtoupper($_SESSION["username"]);
          echo "<h2>Bienvenido: ".$_SESSION["username"]."</h2>";
          ?>
          <!-- barra de progreso -->
        </div>

</body>
</html>