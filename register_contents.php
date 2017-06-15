<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='form_register'>
        <form id='register' action='' method='post' enctype="multipart/form-data">
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>

                <div><span class='error'></span></div>
                <div class='container_form'>
                    <label for='name' >Nombre completo: </label><br/>

                    <input type='text' name='name' id='name' value='<?PHP 
                            if (isset($_POST['name'])) {
                                $name = $_POST['name'];
                            } else {
                                $name = '';
                            }
                            echo $name;
                        ?>' maxlength='50' /><br/>

                    <span class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='<?PHP 
                            if (isset($_POST['email'])) {
                                $email = $_POST['email'];
                            } else {
                                $email = '';
                            }
                            echo $email;
                        ?>' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='<?PHP 
                            if (isset($_POST['username'])) {
                                $username = $_POST['username'];
                            } else {
                                $username = '';
                            }
                            echo $username;
                        ?>' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='repass' >Confirmar contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='repass' id='repass' maxlength="50" />
                    <div id='conformar_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='imgupload' >Imagen de perfil:</label><br/>
                    <input type="file" name="imageToUpload" id="fileToUpload">
                </div>

                <div class='container'>
                    <input type='submit' name='submit' value='Enviar' />
                </div>

                <?PHP 
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        echo 'Los campos tienen errores!';
                    }
                ?>
            </fieldset>
        </form>

    </body>
</html>