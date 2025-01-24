<?php
	include ('MenuBar2.php');
	
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{

		$mobile = mysqli_real_escape_string($db, $_GET["ID_MOBILE"]);
		$user = mysqli_real_escape_string($db, $_SESSION["loggedin"]);
		$like = mysqli_real_escape_string($db, $_GET["tip"]);
		
		$sql = "INSERT INTO interaction_user (ID_mobil, ID_user,tip) VALUES('$mobile', '$user', '$like');";
		$result = mysqli_query($db,$sql);
	}
?>