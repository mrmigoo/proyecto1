<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <h1>Login</h1>
    <?php if ($_POST && count($errores) > 0) { ?>
  		<ul>
  			<?php foreach ($errores as $error) { ?>
  				<li>
  					<?=$error?>
  				</li>
  			<?php } ?>
  		</ul>
  	<?php } ?>
    <form action="login.php" method="post">
      <div class="">
        <label for="">Mail</label>
        <input type="text" name="mail" value="">
      </div>
      <div class="">
        <label for="">Contraseña</label>
        <input type="password" name="password" value="">
      </div>
      <div>
        <input type="checkbox" name="recordar_usu"> Recordar usuario
      </div>
      <div class="">
        <input type="submit" name="" value="Loguearse">
      </div>
    </form>
  </body>
</html>