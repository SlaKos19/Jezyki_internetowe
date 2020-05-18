<!DOCTYPE html>

<html>

    <head>

        <meta http-equiv="content-type" content="text/html" charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <title>Elektronix</title>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
    
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
            <div class="log">
   <div class="row">
    <div class="col-md-8" style="margin:0 auto; float:none;">
     <h3 align="center">Zaloguj się jeśli chcesz dodać ofertę</h3>
     <h5 align="center">Jeśli nie masz jeszcze konta <a href="formularz.php">Kliknij tutaj</a></h5>
     <br />
     
     <form method="post" action="zaloguj.php">
      <div class="form-group">
       <label>Login</label>
       <input type="text" name="login" placeholder="Wpisz Login" class="form-control"/>
      </div>
      <div class="form-group">
       <label>Hasło</label>
       <input type="password" name="haslo" class="form-control" placeholder="Wpisz hasło"/>
      </div>
      <div class="form-group" align="center">
      <input type="submit" value="Zaloguj się" class="click"/>
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












