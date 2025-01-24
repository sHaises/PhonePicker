<!DOCTYPE html>
<html>
	<head>
		<script>
			(function (d, s, id) {
			  var js,
				el = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) {
				return;
			  }
			  js = d.createElement(s);
			  js.async = true;
			  js.src = 'https://s3.ap-south-1.amazonaws.com/conferbot.defaults/dist/v1/widget.min.js';
			  js.id = id;
			  js.charset = 'UTF-8';
			  el.parentNode.insertBefore(js, el);
			  // Initializes the widget when the script is ready
			  js.onload = function () {
				  var w = window.ConferbotWidget("643fe1de7792f506110d95c9", "fullpage_chat");
			  };
			})(document, 'script', 'conferbot-js');
		</script>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

		<link rel="stylesheet" href="CSS/body.css">
		<link rel="stylesheet" href="CSS/LoginBox.css">
		
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Andika&family=Archivo+Narrow&family=Montserrat+Alternates:wght@300&display=swap');
		</style>
		
	</head>
	
	<body>
			<?php include 'MenuBar2.php';?>



	</body>

</html>