<?php
session_start();
if(isset(($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
{
 
}
?>

<!DOCTYPE html>

<html>

    <head>

        <meta http-equiv="content-type" content="text/html" charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <title>Zapisz</title>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

    </head>

    <body>
        <?php
			include_once("logo.php");
		?>
    	<?php
			include_once("menu.php");
		?>

        <div id="dodaj_s">

        <form id="form_dodaj" action="dodaj_kod.php" method="POST" enctype="multipart/form-data">
        <pre id="Nagl_dodaj"> Aby dodać własną ofertę uzupełnij następujące pola !</pre>
        <label class="inputy">Nazwa:</label>
        <input type="text" name="nazwa" class="kwadraciki" />
        <br>
        <label class="inputy">Symbol:</label>
        <input type="text" name="symbol" class="kwadraciki" />
        <br>
        <label class="inputy">Rodzaj:</label>
        <input type="text" name="rodzaj" class="kwadraciki" />
        <br>
        <label class="inputy">Parametry:</label>
        <input type="text" name="parametry" class="kwadraciki" />
        <br>
        <label class="inputy">Cena:</label>
        <input type="text" name="cena" class="kwadraciki" />
        <br>
        <input type="submit" value="Zapisz" id="zapisz_dodaj"/>
        </form>



        <?php
        echo "<p class='wyloq'>Witaj ".$_SESSION['user']. '! [<a href="logout.php">Wyloguj</a>]</p>'
        ?>
        </div>

        <?php
		include_once("footer.php");
		?>

        </div>  
    </body>
</html>