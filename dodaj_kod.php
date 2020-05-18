<?php


$nazwa=$_POST['nazwa'];
$symbol=$_POST['symbol'];
$rodzaj=$_POST['rodzaj'];
$parametry=$_POST['parametry'];
$cena=$_POST['cena'];


if($nazwa==""||$symbol==""||$rodzaj==""||$parametry==""||$cena=="")
{
	echo"Uzupełnij wszystkie pola aby dodać !";
	header("Refresh:5; URL=zapisz.php");
}
else
{
	$polaczenie=mysqli_connect('localhost','root','') or die ("Nie udalo nawiazac polaczenia!");
	mysqli_select_db($polaczenie,'angularjs_datatable') or die ("Brak dostepu do bazy!");



$zapytanie="INSERT INTO user_data (nazwa, symbol, rodzaj, parametry, cena) VALUES ('$nazwa','$symbol','$rodzaj','$parametry','$cena')";
$dzialanie=mysqli_query($polaczenie,$zapytanie) or die ("Nie udalo sie zapisac bazy!");
		
		$dzialanie = mysqli_query($polaczenie, "SELECT Id FROM user_data ORDER BY Id DESC LIMIT 1");
		$auto_id = mysqli_fetch_object($dzialanie);
		
		mysqli_close($polaczenie);
	
		echo '<p class="dodano">Dodano :) Zaraz zostaniesz przekierowany</p>';
		header("Refresh:3; URL=sklep.php");

}



?>