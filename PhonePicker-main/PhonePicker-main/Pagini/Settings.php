<?php  
	include ('MenuBar2.php');
	
	$sql = "SELECT * FROM users where ID_USER = ?"; // SQL with parameters
	$stmt = $db->prepare($sql); 
	$stmt->bind_param("i", $_SESSION['loggedin']);
	$stmt->execute();
	$result = $stmt->get_result(); // get the mysqli result
	$row = $result->fetch_assoc(); // fetch data 

	
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="CSS/body.css">
		<link rel="stylesheet" href="CSS/Account.css">
		<link rel="stylesheet" href="CSS/slideshow.css">
		
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Andika&family=Archivo+Narrow&family=Montserrat+Alternates:wght@300&display=swap');
		</style>
		
	</head>
	
	<body>
		<div style="min-height: 80vh;">

			<div class='center'>
				<div class="LoginBox">
					<div class="left">
						<ul>
							<li><a href="Account.php">Cont</a></li>
							<li><a class="active" href="Settings.php">Setări</a></li>
							<li><a href="IstoricInteractiuni.php">Istoric interacțiuni</a></li>
							<li><a href="Logout.php">Logout</a></li>
						</ul>
					</div>
					
					<div class="middle">
						<div class="vl"></div>
						
					</div>

					<div class="right">
						<!--<div style="margin-top: 2%; margin-bottom: 2%; float: left; width: 60%; padding: 0;">
							<img src="CSS/Others/avatar1.png" alt="Avatar" style="width: 100%;border-radius: 50%; align: center;">
						</div>
						<div style="width: 40%; overflow: hidden;">
							<br><br>
							<div class="text">Nume utilizator</div>
						</div> -->
						
						<!--<img src="CSS/Others/avatar1.png" alt="Avatar" style="width: 70%; border-radius: 50%; display: block;
						margin-left: auto; margin-right: auto;">-->
						
						<div class="slideshow-container">

							<div class="mySlides fade">
								<img src="CSS/Others/avatar1.png" style="width:70%; border-radius: 50%; margin-left: 15%;">
							</div>

							<div class="mySlides fade">
								<img src="CSS/Others/avatar2.png" style="width:70%; border-radius: 50%; margin-left: 15%;">
							</div>
							
							<div class="mySlides fade">
								<img src="CSS/Others/avatar3.png" style="width:70%; border-radius: 50%; margin-left: 15%;">
							</div>
							
							<div class="mySlides fade">
								<img src="CSS/Others/avatar4.png" style="width:70%; border-radius: 50%; margin-left: 15%;">
							</div>
							
							<a class="prev" onclick="plusSlides(-1)">❮</a>
							<a class="next" onclick="plusSlides(1)">❯</a>

						</div>
						<br>

						<input type="text" id="username" placeholder="<?php echo $row["USERNAME"]; ?>" name="username" style="width: 70%; margin-left: 15%;"/>
						<IMG SRC="CSS/Others/pen.png" style="width: 25px; padding: none; margin; 0px;">
						<br/>
						<input type="text" id="email" placeholder="<?php echo $row["EMAIL"]; ?>" name="email" style="width: 70%; margin-left: 15%;"/>
						<IMG SRC="CSS/Others/pen.png" style="width: 25px; padding: none; margin; 0px;">
						<br/>
						
						<button onClick="" type="submit" style="width: 70%; margin-left: 15%;">Salvează</button>

						
					</div>
				</div>
			</div>

		</div>

		<?php include 'Footer.php';?>
		<?php include 'echoBot.php';?>
		
		<script>
		
			let slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
				showSlides(slideIndex += n);
			}

			function currentSlide(n) {
				showSlides(slideIndex = n);
			}

			function showSlides(n) {
				let i;
				let slides = document.getElementsByClassName("mySlides");
				if (n > slides.length) {slideIndex = 1}    
				if (n < 1) {slideIndex = slides.length}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";  
				}
				slides[slideIndex-1].style.display = "block";  
			}
			
			
		</script>
			
	</body>
</html>