<?php session_start();
$_SESSION["usuario"]= "";
header("Location: login.php");
exit;
?>