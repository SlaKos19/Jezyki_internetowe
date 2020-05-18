<?php

	session_start();
	
	if (isset($_POST['email']))
	{
		$wszystko_OK=true;
		
		$nick = $_POST['nick'];
		
		if ((strlen($nick)<3) || (strlen($nick)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nazwa użytkownika musi posiadać od 3 do 20 znaków!";
		}
		
		if (ctype_alnum($nick)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nazwa użytkownika może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
		
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		
		if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
		}
		
		if ($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
		}	
		
		if (!isset($_POST['regulamin']))
		{
			$wszystko_OK=false;
			$_SESSION['e_regulamin']="Potwierdź akceptację regulaminu!";
		}				
		
		$_SESSION['fr_nick'] = $nick;
		$_SESSION['fr_email'] = $email;
		$_SESSION['fr_haslo1'] = $haslo1;
		$_SESSION['fr_haslo2'] = $haslo2;
		if (isset($_POST['regulamin'])) $_SESSION['fr_regulamin'] = true;
		
		require_once "connect.php";

		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
				}		

				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE user='$nick'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_nickow = $rezultat->num_rows;
				if($ile_takich_nickow>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_nick']="Istnieje już użytkownik o takiej nazwie użytkownika! Wybierz inny.";
				}
				
				if ($wszystko_OK==true)
				{
					
					if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$haslo1', '$email')"))
					{
						$_SESSION['udanarejestracja']=true;
						header('Location: witamy.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
				}
				
				$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację jeszcze raz!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
	}
	
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
        	<div class="container">
				<div class="row">
					<div class="col-md-8" style="margin:0 auto; float:none;">
						<h3 id="formh3" align="center">Wypełnij formularz aby się poprawnie utworzyć konto</h3>
						<br/>
						<form method="post">
						<div class="form-group">
							<label>Nazwa Użytkownika</label>
							<input type="text" name="nick" placeholder="Podaj nazwę użytkownika" class="form-control" value="<?php
									if (isset($_SESSION['fr_nick']))
									{
										echo $_SESSION['fr_nick'];
										unset($_SESSION['fr_nick']);
									}
								?>" name="nick" />
								
								<?php
									if (isset($_SESSION['e_nick']))
									{
										echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
										unset($_SESSION['e_nick']);
									}
								?>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control" placeholder="Podaj email" value="<?php
									if (isset($_SESSION['fr_email']))
									{
										echo $_SESSION['fr_email'];
										unset($_SESSION['fr_email']);
									}
								?>" name="email" />
								
								<?php
									if (isset($_SESSION['e_email']))
									{
										echo '<div class="error">'.$_SESSION['e_email'].'</div>';
										unset($_SESSION['e_email']);
									}
								?>
						</div>
						<div class="form-group">
							<label>Podaj hasło</label>
							<input type="password" name="haslo1" class="form-control" placeholder="Podaj hasło" value="<?php
									if (isset($_SESSION['fr_haslo1']))
									{
										echo $_SESSION['fr_haslo1'];
										unset($_SESSION['fr_haslo1']);
									}
								?>" name="haslo1" />
								
								<?php
									if (isset($_SESSION['e_haslo']))
									{
										echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
										unset($_SESSION['e_haslo']);
									}
								?>		
						</div>
						<div class="form-group">
							<label>Powtorz hasło</label>
							<input type="password" name="haslo2" class="form-control" placeholder="Powtórz hasło" value="<?php
									if (isset($_SESSION['fr_haslo2']))
									{
										echo $_SESSION['fr_haslo2'];
										unset($_SESSION['fr_haslo2']);
									}
								?>" name="haslo2" />
						</div>
							<label>
								<input type="checkbox" name="regulamin" <?php
									if (isset($_SESSION['fr_regulamin']))
									{
										echo "checked";
										unset($_SESSION['fr_regulamin']);
									}
										?>/> Akceptuję regulamin
							</label>
      						<div class="form-group" align="center">
      							<input type="submit" value="Zarejestruj się" class="click" />
      						</div>
     					</form>
    				</div>
   				</div>
  			</div>
		</div> 

        <?php
			include_once("footer.php");
		?>
    </body>
</html>