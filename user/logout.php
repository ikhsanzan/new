<?php 

session_start();
//matikan sesion
session_unset();
session_destroy();
$_SESSION = [];

//matikan cookie
setcookie('id','' , time() - 3600);
setcookie('key','' , time() - 3600);

 
header("Location: ../index.php"); 
exit;
?>