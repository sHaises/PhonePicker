<?php  
	include ('MenuBar2.php');
   
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	  
		$myusername = mysqli_real_escape_string($db,$_POST['email']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
		$sql = "SELECT ID_USER FROM users WHERE EMAIL = '$myusername' and PASSWORD = '$mypassword'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
		$count = mysqli_num_rows($result);
		
		if($count == 1) {
			$_SESSION['login_user'] = $myusername;
			$_SESSION['loggedin'] = $row["ID_USER"];
		}
	}
	
	if(isset($_SESSION["loggedin"])){
		header("location: Main.php");
	}
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

		<link rel="stylesheet" href="CSS/body.css">
		<link rel="stylesheet" href="CSS/LoginBox.css">
		<script src="verificariFormulare.js"></script>
		
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Andika&family=Archivo+Narrow&family=Montserrat+Alternates:wght@300&display=swap');
			
		</style>
		
	</head>
	
	<body>
		
		<div style="min-height: 80vh;">

			<div class='center'>
				<div class="LoginBox">
					<div class="left">
						<img src="CSS/Others/mobile.png" alt="mobile">
					</div>

					<div class="right">
						<br><div class="text">Conectare</div><br>

						<form action="" method="post">
							<label for="email">&nbsp;Email:</label>
							<input type="text" id="email" name="email" /><br/>
							<label for="pass">&nbsp;Parolă:</label>
							<input type="password" id="password" name="password" />
							<i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>

							<button onClick="verificareLogin()" type="submit" style="width: 98%; float:right;">Conectare</button>
							
						</form>    

						<div id = "textToCenter" style="">
							Încă nu ai cont? <a href="Register.php">Înregistrează-te acum!</a>
						</div><br>
					</div>
				</div>
			</div>

		</div>

		<?php include 'Footer.php';?>
		<?php include 'echoBot.php';?>
		
			
		<script>
			const togglePassword = document.querySelector('#togglePassword');
			const password = document.querySelector('#password');

			  togglePassword.addEventListener('click', function (e) {
				// toggle the type attribute
				const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
				password.setAttribute('type', type);
				// toggle the eye slash icon
				this.classList.toggle('fa-eye-slash');
			});
		</script>
	</body>
</html>