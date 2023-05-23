<?php
include("../baglan.php");
$mail = $_POST["email"];
$password = $_POST["password"];

if (password_verify($_POST["password"],($conn -> query("SELECT password FROM uyeler WHERE mail = '".$_POST["email"]."'") -> fetch_column()))) {
    session_start();
    $_SESSION["logged-in"] = True;
    $_SESSION["user"] = $_POST["email"];
    header("Location:index.php");
}
else {
    header("Location:index.php");
}
?>