<?PHP
	function redirect($target) {
        header('Location: '.$target);
        die();
    }

    function alertMessage($message) {
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    function readGetParam($name) {
       return $_GET[$name];
    }

    function readPostParam($name) {
       return $_POST[$name];
    }

    function dameUnoPorMail($mail) {
		$usuarios = dameTodos();

		foreach ($usuarios as $usuario) {
			if ($usuario["email"] == $mail) {
				return $usuario;
			}
		}

		return NULL;
	}

	function dameTodos() {
		$archivo = file_get_contents("usuarios.json");

		// Lo separo linea por linea
		$usuariosJSON = explode(PHP_EOL, $archivo);

		// Borro el enter vacio
		array_pop($usuariosJSON);

		$usuariosFinal = [];
		foreach ($usuariosJSON as $usuarioJSON) {
			$usuariosFinal[] = json_decode($usuarioJSON,true);
		}

		return $usuariosFinal;
	}
?>