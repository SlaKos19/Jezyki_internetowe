<?php

	session_start();
	
	if (!isset($_SESSION['udanarejestracja']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}
	
	if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
	if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
	if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
	if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
	if (isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);
	
	if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
	if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
	if (isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
	if (isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);
	
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="content-type" content="text/html" charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<link rel="stylesheet" href="style.css" />
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
			<title>Elektronix</title>
    	</head>

    <body>
		<?php
			include_once("logo.php");
		?>
    	<?php
			include_once("menu.php");
		?>
		<div id="kalkulator_tło">

	
		<h2 id="formh4" align="center">Udało się założyć konto !</h2>
	
	<a class="wyloq" href="logowanie.php">Zaloguj się </a>
	<br /><br />

</div>

<?php
		include_once("footer.php");
?>
    </body>
</html>

