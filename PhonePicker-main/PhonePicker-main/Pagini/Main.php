<!DOCTYPE html>
<html>
	<head>
	
		<link rel="stylesheet" href="CSS/TextAnimation.css">
		<link rel="stylesheet" href="CSS/body.css">
		<link rel="stylesheet" href="CSS/Footer.css">
		
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Andika&family=Archivo+Narrow&family=Montserrat+Alternates:wght@300&display=swap');

	</style>
		
		<!--subtitles :: font-family: 'Montserrat Alternates', sans-serif;-->
		<!--text :: font-family: 'Andika', sans-serif;-->
	</head>
	
	<body>
		
		
		<!-- <div class="box">
			<div class="TextAnimation">
				<p class="animate pop delay">PhonePicker</p>
			</div>
			<div class="text">
			<p class="animate pop delay">
			Platforma care te indruma in cautarea telefonului perfect pentru tine!
			</p>
			</div>
		</div> -->

		<div class="box">
			<video autoplay muted loop id="black">
				<source src="CSS/Others/black.mp4" type="video/mp4">
			</video>
			
			<div class="content">
			  <?php include 'MenuBar.php';?>
			  
			  <div class="box">
				<div class="TextAnimation">
					<p class="animate pop delay">PhonePicker</p>
				</div>
				<div class="text">
					<p class="animate pop delay">
					Platforma care te indruma in cautarea telefonului perfect pentru tine!
					</p>
				</div>
			  </div>
			</div>
		</div>	
			
				<div class="container" style="box-shadow: inset 0px 10px 10px #888888;">
					<div class="first">
						<video autoplay muted loop class="phones">
							<source src="CSS/Others/p1.mp4" type="video/mp4">
						</video>
					</div>
					
					<div class="second">
						<div class="paragraph">
							 &emsp; Alegerea telefonului perfect se poate dovedi a fi o provocare veritabilă! Dintre atâtea modele care există,
							parcă îți vine să alegi unul la nimereală doar pentru a nu-ți irosi timpul.
							Ei bine, ca să alegi totuși ceva de calitate, poți consulta
							pagina noastră <a href="Informatii.php">informativă</a>.
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="first">
						<div class="paragraph" style="margin-left: 15%;">
							Vrei să achiziționezi un telefon, dar nu știi ce ți s-ar potrivi? Lasă asta în seama noastră! Tot ce trebuie să faci 
							este să completezi <a href="form.php">chestionarul</a> nostru și noi îți vom genera câteva opțiuni dintre care să alegi. 
						</div>
					</div>
					
					<div class="second">
						<video autoplay muted loop class="phones">
							<source src="CSS/Others/p2.mp4" type="video/mp4">
						</video>
					</div>
				</div>

				<div class="container">
					<div class="first">
						<video autoplay muted loop class="phones">
							<source src="CSS/Others/p3.mp4" type="video/mp4">
						</video>
					</div>
					
					<div class="second">
						<div class="paragraph">
							this is some random text about phones or whatever. 
							Just a template so I can know how it would look.
							............................... text text text text text text text
							text text text text text text text
							text text text text text text text
							text text text text text text text
						</div>
					</div>

				</div>
	
		<?php include 'Footer.php';?>
		<?php include 'echoBot.php';?>
	</body>
</html>