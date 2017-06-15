<?php
include
'register.php';

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="./css/estilo.css"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Courgette|Dancing+Script|Josefin+Slab|Shadows+Into+Light|Shadows+Into+Light+Two|Source+Sans+Pro" rel="stylesheet"/>
		<title></title>
	</head>
	<body>

	 <header>
    <div id="logo">
      <a href="tutall.php">
        <img src="img/logo_.png" width=200 id="imglogo">
      </a>
    </div>

    

  </header>
	

		<div class="container-registro">
			<form action="formulario.php" method="POST" class="form-registro">
				
				<label for="nombre"></label> 
				<input type="text" name="name" id="name" placeholder="nombre" value="<?PHP 
                            if (isset($errors["fullName"])) {
                                echo $errors["fullName"];
                            }
                        ?>" maxlength="50" /><br/>
				<br>
				<br>
			
					<select name="" id=""> 
						<option value="Hombre">Hombre</option>
						<option value="Mujer">Mujer</option>
					</select>

				
				<br>
				<br>
				<label for="email"></label> 
					<input type="text" name="email" placeholder="Email" id="email" value="<?PHP 
                            if (isset($errors["correo"])) {
                                echo $errors["correo"];
                            }
                        ?>" required/> 
				<br>
				<br>
				<label for="usuario"></label>
					<input type="text" name="username" id="usuario" placeholder="Usuario">
				<br>
				<br>
				<label for="password"></label>
					<input type="text" name="password" id="password" placeholder="Contraseña" value="<?PHP 
                            if (isset($errors["password"])) {
                                echo $errors["password"];
                            }
                        ?>"/>
				<br>
				<br>
				<label for="password"> </label>
					<input type="text" name="repass" id="password" placeholder="Repetir Contraseña" value="<?PHP 
                            if (isset($errors["password"])) {
                                echo $errors["password"];
                            }
                        ?>"/>
				<br>
				<br>

				<button class="submit" type="submit">Registrar</button> 
		    </form>
		</div>
	
		
	</body>
	
</html>

