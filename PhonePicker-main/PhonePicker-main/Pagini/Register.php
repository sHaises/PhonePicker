<?php  
	include ('MenuBar2.php');
   
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	  
		$email = mysqli_real_escape_string($db,$_POST['emailR']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password1']); 
		$myusername = mysqli_real_escape_string($db,$_POST['user']);
		
		$sql0 = "SELECT ID_USER FROM users WHERE email = '$email' and password = '$mypassword'";
		$result0 = mysqli_query($db,$sql0);
		$row0 = mysqli_fetch_array($result0,MYSQLI_ASSOC);
		
		$count0 = mysqli_num_rows($result0);
		
		if($count == 0) {
      
			$sql = "INSERT INTO users (USERNAME,PASSWORD,EMAIL) VALUES ('$myusername','$mypassword', '$email');";
			$result = mysqli_query($db,$sql);
			
			$sql2 = "SELECT ID_USER FROM users WHERE email = '$email' and password = '$mypassword'";
			$result2 = mysqli_query($db,$sql2);
			$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
		  
			$count = mysqli_num_rows($result2);
			
			if($count == 1) {
				$_SESSION['login_user'] = $myusername;
				$_SESSION['loggedin'] = $row2["ID_USER"];
			}
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
		<link rel="stylesheet" href="CSS/Register.css">
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
						<img src="CSS/Others/mobile2.png" alt="mobile">
					</div>

					<div class="right">
						<br><div class="text">Creare cont</div><br>

						<form action="" method="post">
							<label for="email">&nbsp; Email:</label>
							<input type="text" id="emailR" name="emailR" /><br/>
							
							<label for="user">&nbsp; Nume:</label>
							<input type="text" id="user" name="user" /><br/>
							
							<label for="pass">&nbsp; Parolă:</label>
							<input type="password" id="password1" name="password1" />
							<i class="far fa-eye" id="togglePassword1" style="margin-left: -30px; cursor: pointer;"></i>
							
							<label for="pass2">&nbsp; Confirmă parola:</label>
							<input type="password" id="password2" name="password2" />
							<i class="far fa-eye" id="togglePassword2" style="margin-left: -30px; cursor: pointer;"></i>

							<button onClick="verificareRegister()" style="width: 98%; float:right;">Crează cont</button>
						</form>    

						<div id = "textToCenter">
							Ai deja un cont? <a href="Login.php">Conectează-te acum!</a>
						</div><br>
					</div>
				</div>
			</div>
		</div>
		
		<?php include 'Footer.php';?>
		<?php include 'echoBot.php';?>
		
		<script>
			const togglePassword1 = document.querySelector('#togglePassword1');
			const password1 = document.querySelector('#password1');
			const togglePassword2 = document.querySelector('#togglePassword2');
			const password2 = document.querySelector('#password2');

			togglePassword1.addEventListener('click', function (e) {
				// toggle the type attribute
				const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
				password1.setAttribute('type', type);
				// toggle the eye slash icon
				this.classList.toggle('fa-eye-slash');
			});
			
			togglePassword2.addEventListener('click', function (e) {
				// toggle the type attribute
				const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
				password2.setAttribute('type', type);
				// toggle the eye slash icon
				this.classList.toggle('fa-eye-slash');
			});
		</script>
	</body>
</html>