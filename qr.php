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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>QR</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/Estilos2.css">
</head>
<body>
<header>
        <div class="titulo"> <a href="Usuario.php"><img src="imag/l.png"></a></div>
        <nav class="menu">
            <a href="php/cerrar_sesion_usu.php">Cerrar Sesión</a>
        </nav>
    </header>   	
	<div class="container">
		<div id="d6">
			<?php
			include "./qr/qr_prog.php";
			?>
		</div>
		<div id="d7">
			<h1>¡FELICIDADES!<BR>RECLAMA TU PREMIO CON ESTE QR</h1>

		</div>
	</div>
</body>
</html>