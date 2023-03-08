<?php 

session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('iu', '', time() - 3600);
setcookie('ukey', '', time() - 3600);


header("Location: login.php");
exit;

?>