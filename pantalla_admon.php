<?php
session_start();
if (!isset($_SESSION['administrador'])) {
  echo '
     <script>
         alert("Por favor debe autentificarse.");
         window.location =("login_admon.php");
      </script>
        ';
  die();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/admon.css">
</head>

<body>
  <header>
    <div class="logo"> <a href="pantalla_admon.php"><img src="img/LB.png"></a> </div>
    <nav>
      <nav class="menu">
        <a href="php/cerrar_sesion_admon.php">Cerrar sesión</a>
      </nav>
  </header>

  <div class="search">
    <!-- Busqueda -->
    <img class="icon-search" src="img/icon-search.png">
    <form action="pantalla_admon.php" method="POST">
      <input type="text" name="buscar" placeholder="Buscar usuario" required>
      <input type="submit"  value="Buscar">
    </form>
  </div>
  <!-- Delete -->

  <div class="delete">
  <img  src="img/delete.ico">
    <form action="php/eliminar.php" method="POST">
      <input type="text" placeholder="Eliminar usuario" name="borrar">
       <input type="submit" value="Eliminar"> 
    </form> 
    </div>
  <div class="register">
    <a href="administrador/registro_user.php"><img src="img/Custom-Icon-Design-Flatastic-4-Male-user-add.ico" title="Registrar nuevo usuario"></a>
  </div>

  <div class="admon">
    <a href="administrador/registro_admon.php"><img src="img/admon.png" title="Agregar administrador"></a>
  </div>


  <table class="show">
    <tr>
      <td>ID</td>
      <td>Nombre(s)</td>
      <td>Apellido P</td>
      <td>Apellido M</td>
      <td>Grupo</td>
      <td>Botellas</td>
      
    </tr>

    <?php
    include 'php/buscar.php';
    

    while ($datos = mysqli_fetch_array($consulta)) { ?>
      <tr>
        <td><?= $datos['id'] ?></td>
        <td><?= $datos['nombre'] ?></td>
        <td><?= $datos['apellido_p'] ?></td>
        <td><?= $datos['apellido_m'] ?></td>
        <td><?= $datos['grupo'] ?></td>
        <td><?= $datos['botellas'] ?></td>
      
      </tr>

    <?php }  ?>


  </table>

</body>

</html>
