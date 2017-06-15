<?php

  require_once('session.php');
  require_once('util.php');

  function handleGet() {
    if (isLogged()) {
      // el usuario esta loggeado y esta intentando acceder al formulario de login!
      echo 'Chee, el usuario ya esta loggeado!';
    } else {
      require('login_contents.php');
    }
  }

  function handlePost() {
    $errores = validarLogin($_POST);

    if (count($errores) == 0) {
      loguear($_POST["mail"]);

      if (isset($_POST["recordar_usu"])) {
        setcookie("recordar_usu", $_POST["mail"], time() + 3600 * 24);
      }

      //header("location:inicio.php");exit;
      redirect('/tutall.php');
    } else {
      // hubo algun error con el login!
      var_dump($errores);
    }
  }

  function validarLogin($datos) {
    $errores = [];

    $email = trim($datos["mail"]);

    if ($email === "") {
      $errores["mail"] = "Che amigo, te falto el mail";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errores["mail"] = "Mal formato de email";
    }
    else if (dameUnoPorMail($email) == NULL) {
      $errores["mail"] = "Ese mail no existe en nuestra base";
    } else {
      // SIGNIFICA QUE EL USUARIO EXISTE

      $usuario = dameUnoPorMail($email);
      if (!password_verify($datos["password"], $usuario["password"])) {
        $errores["mail"] = "Contraseña invalida";
      }
    }


    return $errores;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      handlePost();
  } else if($_SERVER['REQUEST_METHOD'] === 'GET'){
      handleGet();
  }
?>