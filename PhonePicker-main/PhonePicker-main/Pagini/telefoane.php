<?php  
	include ('MenuBar2.php');
				
    $sql = "SELECT * FROM mobiles_for_site";
    $result = mysqli_query($db,$sql);
	
	$row1 = $result->fetch_assoc();
	$row2 = $result->fetch_assoc();
	$row3 = $result->fetch_assoc();
	$row4 = $result->fetch_assoc();
	$row5 = $result->fetch_assoc();
	$row6 = $result->fetch_assoc();
	$row7 = $result->fetch_assoc();
	$row8 = $result->fetch_assoc();
	$row9 = $result->fetch_assoc();
	$row10 = $result->fetch_assoc();
	$row11 = $result->fetch_assoc();
	$row12 = $result->fetch_assoc();
	$row13 = $result->fetch_assoc();
	$row14 = $result->fetch_assoc();
	$row15 = $result->fetch_assoc();
	$row16 = $result->fetch_assoc();
	$row17 = $result->fetch_assoc();
	$row18 = $result->fetch_assoc();
	$row19 = $result->fetch_assoc();
	$row20 = $result->fetch_assoc();
	$row21 = $result->fetch_assoc();
	$row22 = $result->fetch_assoc();
	$row23 = $result->fetch_assoc();
	

?>


<html>
	<head>
		<link rel="stylesheet" href="CSS/body.css">
		<link rel="stylesheet" href="CSS/telefoane.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		<script src="telefoane.js"></script>
		
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Andika&family=Archivo+Narrow&family=Montserrat+Alternates:wght@300&display=swap');
			button {
				background: none;
				color: inherit;
				border: none;
				padding: 0;
				font: inherit;
				cursor: pointer;
				outline: inherit;
				float: left;
				margin: none;
				display: inline-block;
				text-align: center;
			}
		</style>
		
		<!--subtitles :: font-family: 'Montserrat Alternates', sans-serif;-->
		<!--text :: font-family: 'Andika', sans-serif;-->
	</head>
	
	<body style="background-color: white;">
		<div style="min-height: 80vh; background-color: white;">
			
			<div style="font-family: 'Montserrat Alternates', sans-serif; font-weight: bold; font-size: 40px; 
			text-align: center; margin-top: 4%; width: 100%">
					Top 21 cele mai populare telefoane </div>
				
			<div class='center'>
				<table style="margin-top: 3%;">
					
					<tr style="padding-bottom: 4%;"> 
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row1['picture']; ?>" alt="phone">
								</div>
								<div class="textCard">
									OnePlus 11<br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL1( <?php echo $row1["ID_MOBILE"]; ?> , 0)"> <img id="like1" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD1(<?php echo $row1["ID_MOBILE"]; ?> , 1)"> <img id="dislike1" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
						
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row2['picture']; ?>" alt="girl">
								</div>
								<div class="textCard">
									Realme GT 2 Pro 5G <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL2( <?php echo $row2["ID_MOBILE"]; ?>, 0 )"> <img id="like2" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD2(<?php echo $row2["ID_MOBILE"]; ?> , 1)"> <img id="dislike2" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
					
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row3['picture']; ?>" alt="girl">
								</div>
								<div class="textCard">
									Samsung Galaxy A53 <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL3(<?php echo $row3["ID_MOBILE"]; ?> ,  0)"> <img id="like3" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD3(<?php echo $row3["ID_MOBILE"]; ?> , 1)"> <img id="dislike3" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
					<tr style="padding-bottom: 4%;"> 
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row4['picture']; ?>" alt="phone">
								</div>
								<div class="textCard">
									Google Pixel 6 Pro<br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL4(<?php echo $row4["ID_MOBILE"]; ?> ,  0)"> <img id="like4" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD4(<?php echo $row4["ID_MOBILE"]; ?> ,  1)"> <img id="dislike4" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
						
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row5['picture']; ?>" alt="girl">
								</div>
								<div class="textCard">
									Xiaomi 12 Pro 5G <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL5(<?php echo $row5["ID_MOBILE"]; ?> ,  0)"> <img id="like5" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD5(<?php echo $row5["ID_MOBILE"]; ?> ,  1)"> <img id="dislike5" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
					
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row6['picture']; ?>" alt="girl">
								</div>
								<div class="textCard">
									ZTE Axon 40 Ultra 5G <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL6(<?php echo $row6["ID_MOBILE"]; ?> , 0)"> <img id="like6" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD6(<?php echo $row6["ID_MOBILE"]; ?> , 1)"> <img id="dislike6" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
					<tr style="padding-bottom: 4%;"> 
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row7['picture']; ?>" alt="phone">
								</div>
								<div class="textCard">
									Xiaomi 13 5G<br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL7(<?php echo $row7["ID_MOBILE"]; ?> , 0)"> <img id="like7" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD7(<?php echo $row7["ID_MOBILE"]; ?> , 1)"> <img id="dislike7" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
						
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row8['picture']; ?>" alt="girl">
								</div>
								<div class="textCard">
									Samsung Galaxy Z Fold 3 <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL8(<?php echo $row8["ID_MOBILE"]; ?> , 0)"> <img id="like8" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD8(<?php echo $row8["ID_MOBILE"]; ?> , 1)"> <img id="dislike8" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
					
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row9['picture']; ?>" alt="girl">
								</div>
								<div class="textCard">
									Samsung Galaxy S23 Plus <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL9(<?php echo $row9["ID_MOBILE"]; ?> , 0)"> <img id="like9" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD9(<?php echo $row9["ID_MOBILE"]; ?> , 1)"> <img id="dislike9" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
					<tr style="padding-bottom: 4%;"> 
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row10['picture']; ?>" alt="phone">
								</div>
								<div class="textCard">
									LG Wing 5G<br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL10(<?php echo $row10["ID_MOBILE"]; ?> , 0)"> <img id="like10" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD10(<?php echo $row10["ID_MOBILE"]; ?> ,  1)"> <img id="dislike10" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
						
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row11['picture']; ?>" alt="girl">
								</div>
								<div class="textCard">
									OnePlus 10 Pro 5G <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL11(<?php echo $row11["ID_MOBILE"]; ?> ,  0)"> <img id="like11" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD11(<?php echo $row11["ID_MOBILE"]; ?> ,  1)"> <img id="dislike11" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
					
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row12['picture']; ?>" alt="girl">
								</div>
								<div class="textCard">
									Motorola Edge 40 Pro 5G <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL12(<?php echo $row12["ID_MOBILE"]; ?> ,  0)"> <img id="like12" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD12(<?php echo $row12["ID_MOBILE"]; ?> ,  1)"> <img id="dislike12" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
					<tr style="padding-bottom: 4%;"> 
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row13['picture']; ?>" alt="phone">
								</div>
								<div class="textCard">
									OnePlus 9 Pro<br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL13(<?php echo $row13["ID_MOBILE"]; ?>, 0)"> <img id="like13" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD13(<?php echo $row13["ID_MOBILE"]; ?> ,  1)"> <img id="dislike13" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
						
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row14['picture']; ?>" alt="girl">
								</div>
								<div class="textCard">
									Xiaomi 12T Pro 5G <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL14(<?php echo $row14["ID_MOBILE"]; ?> , 0)"> <img id="like14" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD14(<?php echo $row14["ID_MOBILE"]; ?> ,  1)"> <img id="dislike14" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
					
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row15['picture']; ?>" alt="girl">
								</div>
								<div class="textCard">
									Sony Xperia 1 II <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL15(<?php echo $row15["ID_MOBILE"]; ?> ,  0)"> <img id="like15" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD15(<?php echo $row15["ID_MOBILE"]; ?> ,  1)"> <img id="dislike15" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
					<tr style="padding-bottom: 4%;"> 
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row16['picture']; ?>" alt="phone">
								</div>
								<div class="textCard">
									Motorola Edge Plus<br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL16(<?php echo $row16["ID_MOBILE"]; ?> ,  0)"> <img id="like16" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD16(<?php echo $row16["ID_MOBILE"]; ?> ,  1)"> <img id="dislike16" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
						
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row17['picture']; ?>" alt="girl">
								</div>
								<div class="textCard">
									Motorola Edge 30 Pro 5G <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL17(<?php echo $row17["ID_MOBILE"]; ?> , 0)"> <img id="like17" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD17(<?php echo $row17["ID_MOBILE"]; ?> ,  1)"> <img id="dislike17" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
					
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row18['picture']; ?>" alt="girl">
								</div>
								<div class="textCard">
									Samsung Galaxy Note 10 Plus 5G <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL18(<?php echo $row18["ID_MOBILE"]; ?> ,  0)"> <img id="like18" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD18(<?php echo $row18["ID_MOBILE"]; ?> ,  1)"> <img id="dislike18" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
					<tr style="padding-bottom: 4%;"> 
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row23['picture']; ?>" alt="phone">
								</div>
								<div class="textCard">
									Xiaomi Redmi Note 12 <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL19(<?php echo $row23["ID_MOBILE"]; ?> ,  0)"> <img id="like19" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD19(<?php echo $row23["ID_MOBILE"]; ?> ,  1)"> <img id="dislike19" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
						
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row19['picture']; ?>" alt="girl">
								</div>
								<div class="textCard">
									Sony Xperia 5 IV 5G <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL20(<?php echo $row19["ID_MOBILE"]; ?> ,  0)"> <img id="like20" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD20(<?php echo $row19["ID_MOBILE"]; ?> ,  1)"> <img id="dislike20" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
					
						<td>
							<div class="productCard">
								<div class="imgCard">
									<img src="<?php echo $row20['picture']; ?>" alt="girl">
								</div>
								<div class="textCard">
									Huawei Mate Xs 2 <br>
									<div class="btn-group" style="width:100%; margin-top: 4%;">
										<button onClick="changeL21(<?php echo $row20["ID_MOBILE"]; ?> ,  0)"> <img id="like21" src="CSS/Others/like3.svg" alt="like" style="width:50%"> </button>
										<button onClick="changeD21(<?php echo $row20["ID_MOBILE"]; ?> , 1)"> <img id="dislike21" src="CSS/Others/dislike3.svg" alt="dislike" style="width:50%"> </button>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
				</table>
						
				
			</div>
		</div>

	
		<?php include 'Footer.php';?>
		<?php include 'echoBot.php';?>
		
	</body>
</html>