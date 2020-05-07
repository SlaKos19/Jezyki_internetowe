<?php

session_start();

require_once "connect.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
if($polaczenie->connect_errno!=0)
{
    echo "Error: ".$polaczenie ->connect_errno;
}

$login = $_POST['login'];
$haslo = $_POST['haslo'];


$sql = "SELECT* FROM uzytkownicy WHERE user='$login' AND pass='$haslo'";

if($rezultat = @$polaczenie->query($sql))
{
    $ilu_userow = $rezultat->num_rows;
    if($ilu_userow>0)
    {

        $_SESSION['zalogowany'] = true;

        $wiersz = $rezultat->fetch_assoc();
        $_SESSION['id'] = $wiersz['id'];
        $_SESSION['user'] = $wiersz['user'];
        unset($_SESSION['blad']);
        $rezultat->close();
        header('Location:zapisz.php');

    }else{
        $_SESSION['blad'] = '<span style="color:red">Nieprawidłowe dane</span> ';
        header('Location:index.php');
    }
}

$polaczenie->close();





?>