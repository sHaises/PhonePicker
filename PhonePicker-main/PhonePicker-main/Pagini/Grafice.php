<!DOCTYPE html>
<html>
	<head>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	
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

		<div style="min-height: 80vh;">
			<?php include 'MenuBar2.php';?>
			
			<div style="font-family: 'Montserrat Alternates', sans-serif; font-weight: bold; font-size: 40px; text-align: center; margin-top: 4%; width: 100%">
					Ce spun rating-urile </div>
		
			
				<div class="container" style="margin-top:3%; height: 80vh;">

						<iframe title="PhonePicker2" width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=ef146ff6-216e-435b-a3c2-75a109896837&autoAuth=true&ctid=90bc7298-1c17-48c6-830b-e88b375f216d" frameborder="0" allowFullScreen="true"></iframe>


				</div>
				

		</div>
	
		<?php include 'Footer.php';?>
		<?php include 'echoBot.php';?>
		
		<script>
			const xValues = [100,200,300,400,500,600,700,800,900,1000];

			new Chart("myChart", {
			  type: "line",
			  data: {
				labels: xValues,
				datasets: [{ 
				  data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
				  borderColor: "red",
				  fill: false
				}, { 
				  data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
				  borderColor: "green",
				  fill: false
				}, { 
				  data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
				  borderColor: "blue",
				  fill: false
				}]
			  },
			  options: {
				legend: {display: false}
			  }
			});
		</script>
	</body>
</html>