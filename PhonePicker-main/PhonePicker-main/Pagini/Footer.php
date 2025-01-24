<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="CSS/body.css">
		
		<style>
			::placeholder {
				color: black;
				opacity: 0.7; 
			}
		</style>

	</head>
	
	<body>

		<div class="container" style="bottom: 0; margin: 0; margin-top: 3%; background-color: #001a1a;  display: block;
			height: 20vh; color: white; box-shadow: inset 0 10px 10px -5px #888888;">
			
			<div class="first" style="width: 30%;">
				<p> </p>
				<div style="margin-left: 5%;
					font-family: 'Montserrat Alternates', sans-serif;
					font-weight: bold; font-size: 50px; text-align: left;">
					PhonePicker
				</div>
				<div style="margin-left: 5%;
					font-family: 'Montserrat Alternates', sans-serif;
					font-size: 20px; text-align: left;">
					Contact information
				</div>
				<p> </p>
			</div>
					
			<div class="second" style="width: 70%";>
				<table style="border: none; width:100%; text-align: center">
					<tr>
						<td> <p> </p> </td>
						<td> <p> </p> </td>
						<td> <p> </p> </td>
					</tr>
					<tr>
						<th style="font-size: 22px; color: white; 
						font-family: 'Montserrat Alternates', sans-serif;"> 
							General </th>
						<th style="padding-left: 40%;
						font-family: 'Montserrat Alternates', sans-serif;"> 
							<form role="search" id="form" style="background-color: #e6e6e6; width: 300px; height: 44px; border-radius: 5px; display:flex; 
								flex-direction:row; align-items:center;">
								
								<input type="search" id="query" name="q" placeholder="Search..." style="all: unset; font: 16px;
									color: black; height: 100%; width: 100%; padding: 6px 10px;">
									
								<button style="all: unset; cursor: pointer; width: 44px; height: 44px;">
									<IMG SRC="CSS/Others/search.gif" style="width: 30px; padding: none; margin; 1px;">
								</button>
								&nbsp;
							</form>
						<th style="font-size: 22px;
						font-family: 'Montserrat Alternates', sans-serif;"> 
							<p> </p> </th>
					</tr>
					<tr>
						<td> <p> </p> </td>
						<td> <p> </p> </td>
					</tr>
					<tr>
						<td> <a href="Main.php" style="color: white; font-size: 17px;
							text-align: center; text-decoration: none;
							font-family: 'Montserrat Alternates', sans-serif;">
								Acasa</a> </td>
								
						<td style="padding-left: 20%";>
							<a href="#" style="text-decoration: none;"> <IMG SRC="CSS/Others/share.gif" style="width: 30px; padding: none; margin; 1px;"> </a> &nbsp;
							<a href="#" style="text-decoration: none;"> <IMG SRC="CSS/Others/help.gif" style="width: 30px; padding: none; margin; 1px;"> </a> </th>
						</td>
						
					</tr>
				</table>
				<p> </p>
			</div>
			<hr style="width: 95%; align: center">

			<div style="color: white; text-align: center;">
				Website Terms | Privacy Policy
				<p></p>
			</div>
		</div>

	</body>
	
	<script>
      const f = document.getElementById('form');
      const q = document.getElementById('query');
      const google = 'https://www.google.com/search?q=site%3A+';
      const site = 'pagedart.com';

      function submitted(event) {
        event.preventDefault();
        const url = google + site + '+' + q.value;
        const win = window.open(url, '_blank');
        win.focus();
      }

      f.addEventListener('submit', submitted);
    </script>
</html> 
