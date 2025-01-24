<?php
   include("session.php");
   
	unset($_SESSION["loggedin"]);
	unset($_SESSION["login_user"]);
	header("location:main.php");
?>