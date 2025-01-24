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
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

		<link rel="stylesheet" href="CSS/body.css">
		<link rel="stylesheet" href="CSS/form.css">
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
						<img src="CSS/Others/mobile4.png" alt="mobile">
					</div>

					<div class="right">
						<br><div id="titlu" class="text" style="font-size: 23px;">Răspunde la următoarele întrebări 
								pentru a afla ce telefon ți se potrivește.</div><br>

						<form action="" onSubmit="return false">
							<div id="page1">
								<!-- <label for="email">Email-ul dvs.:</label>
								<input type="text" id="email" name="email" style="width: 100%; height: 25px; font-size: 18px;
									border-top: none; border-left: none; border-right: none; margin-bottom: 5%; background: rgba(0, 0, 0, 0);
									font-family: 'Andika', sans-serif;"/><br/> -->
									
								<label for="timp">Cât timp petreceți pe telefon pe zi?</label>
								<select name="timp" id="timp">
									<option value="1"> < 2 ore </option>
									<option value="2"> 2 - 4 ore </option>
									<option value="3"> 4 - 6 ore </option>
									<option value="4"> > 6 ore </option>
								</select> <br>
								
								<label for="activitate">La ce veți folosi telefonul?</label>
								<select name="activitate" id="activitate">
									<option value="1"> Apeluri telefonice </option>
									<option value="2"> Fotografie </option>
									<option value="3"> Videografie </option>
									<option value="4"> Jocuri </option>
									<option value="5"> Divertisment </option>
								</select> <br>
							
								<label for="buget">Ce buget aveți?</label>
								<select name="buget" id="buget">
									<option value="1"> < 60 euro </option>
									<option value="2"> 60 - 100 euro </option>
									<option value="3"> 100 - 300 euro </option>
									<option value="4"> 300 - 600 euro </option>
									<option value="5"> 600 - 1000 euro </option>
									<option value="6"> > 1000 euro </option>
								</select> <br>
								
								<label for="vedere">Cum vă considerați vederea?</label>
								<select name="vedere" id="vedere">
									<option value="1"> Rea </option>
									<option value="2"> Așa și așa </option>
									<option value="3"> Bună </option>
									<option value="4"> Foarte bună </option>
								</select> <br>
								

								<button onClick="paginaDisplay()">Următoarea pagină</button>
							
							</div>
							
							<div id="page2" style="display: none;">
							
								
								
								<label for="firmaT">Aveți o firmă preferată de telefon?</label>
								<select name="firmaT" id="firmaT">
									<option value="1"> Nu </option>
									<option value="2"> Samsung </option>
									<option value="3"> Xiaomi </option>
									<option value="4"> Motorola  </option>
									<option value="5"> Sony </option>
									<option value="6"> Huawei </option>
									<option value="7"> Apple </option>
								</select> <br>
								
								<label for="opinie">Contează opinia altora pentru dvs.?</label>
								<select name="opinie" id="opinie">
									<option value="1"> Nu </option>
									<option value="2"> Da </option>
								</select> <br>
								
								<label for="cartele">Câte cartele doriți într-un telefon?</label>
								<select name="cartele" id="cartele">
									<option value="1"> 1 </option>
									<option value="2"> 2 </option>
									<option value="3"> Irelevant </option>
								</select> <br>
								
								<label for="poze">Câte poze/filme doriți să păstrați?</label>
								<select name="poze" id="poze">
									<option value="1"> Puține ( < 100 ) </option>
									<option value="2"> Mediu ( 100 - 500 ) </option>
									<option value="3"> Multe ( 500 - 1000 ) </option>
									<option value="4"> Foarte multe ( > 1000 ) </option>
								</select> <br>
								
								<button onClick="Inapoi()" style="width: 20%"> < </button> &nbsp;
								<button onClick="Salveaza()" style="width: 70%">Trimite</button>
								
							</div>
							
							<div id="mesaj" class="text" style="font-size: 23px; display: none;">Vă mulțumim pentru completarea formularului!
							<br><br>
							<div style="font-size: 20px;">Telefonul care vi s-ar potrivi este
								<div id="tel1" style="display: none">Samsung Galaxy Note 30 Ultra 5G</div>
								<div id="tel2" style="display: none">Apple iPhone 15</div>
								<div id="tel3" style="display: none">Samsung Galaxy M53</div>
								<div id="tel4" style="display: none">Xiaomi Redmi 11</div>
								<div id="tel5" style="display: none">Realme C33</div>
								<div id="tel6" style="display: none">Nokia 105</div>
								
							<!--<div style="font-size: 20px;">Ve-ți primi un răspuns în scurt timp pe adresa de email <?php #echo $row["EMAIL"]; ?>.-->
							<br><br>Dacă nu sunteți mulțumiți de rezultat, puteți completa chestionarul din nou cu alte date.<br></div>
							<button onClick="completeazaDinNou()" style="width: 70%">Completează din nou</button>
							</div><br>
							
						</form>    


					</div>
				</div>
			</div>

		</div>

		<?php include 'Footer.php';?>
		<?php include 'echoBot.php';?>
		
		<script>
			function paginaDisplay(){
				document.getElementById('page1').style.display="none";
				document.getElementById('page2').style.display="block";
			}
			
			function Inapoi(){
				document.getElementById('page1').style.display="block";
				document.getElementById('page2').style.display="none";
			}
			
			function Salveaza(){
				document.getElementById('titlu').style.display="none";
				document.getElementById('page2').style.display="none";
				document.getElementById('mesaj').style.display="block";
				
				var e = document.getElementById("buget");
				var value = e.value;
				var text = e.options[e.selectedIndex].text;
				
				if(value==1){
					document.getElementById('tel6').style.display="block";
				} else if(value==2){
					document.getElementById('tel5').style.display="block";
				} else if(value==3){
					document.getElementById('tel4').style.display="block";
				} else if(value==4){
					document.getElementById('tel3').style.display="block";
				} else if(value==5){
					document.getElementById('tel2').style.display="block";
				} else if(value==6){
					document.getElementById('tel1').style.display="block";
				}
					
			}
			
			function completeazaDinNou(){
				window.location.reload();
			}
		</script>
		
			
	</body>
</html>