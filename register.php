<?PHP
    require_once('session.php');
    require_once('util.php');

    function handleGet() {
        if (isLogged()) {
          // el usuario esta loggeado y esta intentando acceder al formulario de login!
          echo 'Chee, el usuario ya esta loggeado!';
        } else {
          require('register_contents.php');
        }
    }

    function handlePost() {
        $errors = verificarRegistro();

        if (count($errors) == 0) {
            //insert con el nuevo usuario a la DB
            //devolver HTML con respuesta
            // aca tendría que grabar mi usuario en el JSON
            $usuario = [
                "usuario" => readPostParam('username'),
                "nombreCompleto" => readPostParam('name'),
                "email" => readPostParam('email'),
                "password" => password_hash(readPostParam('password'), PASSWORD_DEFAULT)
            ];

            if (guardarImagen2('imageToUpload')) {
                $usuarioJSON = json_encode($usuario).PHP_EOL;
                //ojo que tenga persmisos
                file_put_contents("usuarios.json", $usuarioJSON, FILE_APPEND);
                // echo 'Usuario creado';
                // redirect a la pagina principal
                loguear($usuario['email']);
                redirect('/tutall.php');
            } else {
                // error al guardar imagen
                // no deberia llegar nunca aca
            }


        } else {
            //en este punto, hay errores en el formulario
            require('register_contents.php');
            //var_dump($errors);
        }
    }

    function guardarImagen2($uploadName) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES[$uploadName]["name"]);

        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        if (!isValidImage($uploadName)) {
            echo 'no es una imagen valida';
        } else {
            if (move_uploaded_file($_FILES[$uploadName]["tmp_name"], $target_file)) {
                //echo "The file ". basename( $_FILES[$uploadName]["name"]). " has been uploaded.";
                return true;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        return false;
    }

    function isValidImage($uploadName) {
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES[$uploadName]["tmp_name"]);
            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                return true;
            } else {
                echo "File is not an image.";
            }
        }
        return false;
    }

    function verificarRegistro() {
        $errors = [];

        $fullName = readPostParam('name');
        $email = readPostParam('email');
        $user = readPostParam('username');
        $pass = readPostParam('password');
        $repass = readPostParam('repass');

        if ($fullName === '') {
            $errors['fullName'] = 'El nombre completo esta vacio';
        }

        if ($email === '') {
            $errors['correo'] = 'El campo correo no debe quedar vacio';
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['correo'] = 'El campo correo no es valido';
        }
        if ($pass === '' || $repass === '') {
            $errors['password'] = 'Las no pueden quedar vacías';
        } else if ($pass !== $repass) {
            $errors['password'] = 'Las contraseñas no coinciden';
        }

        if (!isValidImage('imageToUpload')) {
            $errors['image'] = 'No se pudo subir la imagen';
        }

        return $errors;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        handlePost();
    } else if($_SERVER['REQUEST_METHOD'] === 'GET'){
        handleGet();
    }

  //   function loguear($data){
  //       //$data["email"]; //$_POST["usuario"];
  //       //$data["password"]; //$_POST["password"];

  //       //abrir el json y ver los usuarios
  //       $usuariosJSON = file_get_contents("usuarios.json");
  //       $usuarios = json_decode($usuariosJSON);

  //    //   foreach ($usuarios as $usuario) {
  //    //       if($usuario["email"] === $data["email"]){
  //               //aca recorro el json y cuando coinciden el usuario que ingreso en el form de login con el usuario del json     entro al IF
  //    //           if(password_verify($data["password"],$usuario["password"]){
  //                       // si entra a este IF es porque coincidio el usuario y la constrasñea
  //                       //LOGUEA
  //               }   
  //  //         }
  //   //    }

        
  // //  }

  //   // aca entro cuando en el form de login.php me loguean; 
  //   // usuario y una passowrd
  //   //loguear($_POST);

?>