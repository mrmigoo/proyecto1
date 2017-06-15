<?php
include
'register.php'
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
      <a href="tutall.html">
        <img src="img/logo_.png" width=200 id="imglogo">
      </a>
    </div>

    

  </header>
	

		<div class="container-registro">
			<form action="#" method="" class="form-registro">
				
				<label for="nombre"></label> 
					<input type="text" placeholder="Nombre" id="nombre" required /> 
				<br>
				<br>

				<label for="apellido"></label>
					<input type="text" placeholder="Apellido" id="nombre" required /> 
				<br>
			
				<br>
				
			
					<select name="" id=""> 
						<option value="Hombre">Hombre</option>
						<option value="Mujer">Mujer</option>
					</select>

				
				<br>
				<br>
				<label for="email"></label> 
					<input type="text" name="email" placeholder="Email" id="email" required/> 
				<br>
				<br>
				<label for="usuario"></label>
					<input type="text" name="usuario" id="usuario" placeholder="Usuario"/>
				<br>
				<br>
				<label for="password"></label>
					<input type="text" name="password" id="password" placeholder="Contraseña"/>
				<br>
				<br>
				<label for="password"> </label>
					<input type="text" name="password" id="password" placeholder="Repetir Contraseña"/>
				<br>
				<br>

				<button class="submit" type="submit">Registrar</button> 
		    </form>
		</div>
	
		
	</body>
	
</html>

