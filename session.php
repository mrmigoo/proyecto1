<?PHP
	require_once('util.php');
	session_start();

	if (!isset($_SESSION["usuario"]) && isset($_COOKIE["recordar_usu"])) {
		loguear($_COOKIE["recordar_usu"]);
	}

	function isLogged() {
		return isset($_SESSION["usuario"]);
	}

	function getMail() {
		return $_SESSION["usuario"];
	}

	function loguear($mail) {
		$_SESSION["usuario"] = $mail;
	}

	function logout() {
		deleteCookie('recordar_usu');

		// Unset all of the session variables.
		$_SESSION = array();

		session_destroy();
	}

	function deleteCookie($cookieName) {
		setcookie($cookieName, "", time() - 3600);
	}
?>