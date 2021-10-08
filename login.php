<?php
session_start();
$_SESSION["username"]="Mochart Sakryan";
$_SESSION["password"]="12345678";
if (isset($_POST["login"])){
    if ($_POST["username"]=="Mochart" && $_POST["password"]=="1234"){
        header("location:login.html");
    }else{
        echo "Maaf Username Atau Password Salah !";
    }
}
?>