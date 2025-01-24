

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="CSS/body.css">
		<link rel="stylesheet" href="CSS/Account.css">
		
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Andika&family=Archivo+Narrow&family=Montserrat+Alternates:wght@300&display=swap');
		</style>
		
	</head>
	
	<body>
		<div style="min-height: 80vh;">
			<?php include 'MenuBar2.php';?>
			<div class='center'>
				<div class="LoginBox">
					<div class="left">
						<ul>
							<li><a href="Account.php">Cont</a></li>
							<li><a href="Settings.php">Setări</a></li>
							<li><a class="active" href="IstoricInteractiuni.php">Istoric interacțiuni</a></li>
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
						
						<div class="text" style="margin-left: auto; margin-right: auto; font-size: 25px; margin-top: 5%">Istoric interacțiuni</div>
						
						<div>
  
						</div>
						
						

						
					</div>
				</div>
			</div>

		</div>

		<?php include 'Footer.php';?>
		<?php include 'echoBot.php';?>
			
	</body>
</html>