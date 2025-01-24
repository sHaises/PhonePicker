
function changeL1(cod_tel, cod_like) {
	var k = document.getElementById('dislike1').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike1').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like1').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like1').src = ('CSS/Others/like3.svg');
		
	} else {
		document.getElementById('like1').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel, tip : cod_like},// passing the values
			});
	}
}

function changeD1(cod_tel,  cod_like) {
	var k = document.getElementById('like1').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like1').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike1').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike1').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike1').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel, tip : cod_like},// passing the values
			});
	}
}

function changeL2(cod_tel,  cod_like) {
	var k = document.getElementById('dislike2').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike2').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like2').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like2').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like2').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD2(cod_tel,  cod_like) {
	var k = document.getElementById('like2').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like2').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike2').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike2').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike2').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel, tip : cod_like},// passing the values
			});
	}
}

function changeL3(cod_tel,  cod_like) {
	var k = document.getElementById('dislike3').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike3').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like3').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like3').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like3').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD3(cod_tel, cod_like) {
	var k = document.getElementById('like3').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like3').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike3').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike3').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike3').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL4(cod_tel,  cod_like) {
	var k = document.getElementById('dislike4').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike4').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like4').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like4').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like4').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD4(cod_tel,  cod_like) {
	var k = document.getElementById('like4').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like4').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike4').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike4').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike4').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL5(cod_tel, cod_like) {
	var k = document.getElementById('dislike5').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike5').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like5').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like5').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like5').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD5(cod_tel,  cod_like) {
	var k = document.getElementById('like5').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like5').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike5').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike5').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike5').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel, tip : cod_like},// passing the values
			});
	}
}

function changeL6(cod_tel,  cod_like) {
	var k = document.getElementById('dislike6').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike6').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like6').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like6').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like6').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD6(cod_tel,  cod_like) {
	var k = document.getElementById('like6').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like6').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike6').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike6').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike6').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL7(cod_tel,  cod_like) {
	var k = document.getElementById('dislike7').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike7').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like7').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like7').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like7').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD7(cod_tel,  cod_like) {
	var k = document.getElementById('like7').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like7').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike7').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike7').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike7').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL8(cod_tel,  cod_like) {
	var k = document.getElementById('dislike8').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike8').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like8').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like8').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like8').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD8(cod_tel,  cod_like) {
	var k = document.getElementById('like8').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like8').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike8').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike8').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike8').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL9(cod_tel,  cod_like) {
	var k = document.getElementById('dislike9').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike9').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like9').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like9').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like9').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD9(cod_tel,  cod_like) {
	var k = document.getElementById('like9').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like9').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike9').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike9').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike9').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}


function changeL10(cod_tel,  cod_like) {
	var k = document.getElementById('dislike10').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike10').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like10').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like10').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like10').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel, tip : cod_like},// passing the values
			});
	}
}

function changeD10(cod_tel,  cod_like) {
	var k = document.getElementById('like10').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like10').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike10').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike10').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike10').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL11(cod_tel, cod_like) {
	var k = document.getElementById('dislike11').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike11').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like11').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like11').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like11').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD11(cod_tel,  cod_like) {
	var k = document.getElementById('like11').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like11').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike11').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike11').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike11').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL12(cod_tel,  cod_like) {
	var k = document.getElementById('dislike12').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike12').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like12').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like12').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like12').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD12(cod_tel,  cod_like) {
	var k = document.getElementById('like12').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like12').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike12').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike12').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike12').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL13(cod_tel,  cod_like) {
	var k = document.getElementById('dislike13').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike13').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like13').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like13').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like13').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD13(cod_tel,  cod_like) {
	var k = document.getElementById('like13').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like13').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike13').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike13').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike13').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL14(cod_tel, cod_like) {
	var k = document.getElementById('dislike14').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike14').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like14').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like14').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like14').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel, tip : cod_like},// passing the values
			});
	}
}

function changeD14(cod_tel, cod_like) {
	var k = document.getElementById('like14').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like14').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike14').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike14').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike14').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL15(cod_tel, cod_like) {
	var k = document.getElementById('dislike15').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike15').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like15').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like15').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like15').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD15(cod_tel,  cod_like) {
	var k = document.getElementById('like15').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like15').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike15').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike15').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike15').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel, tip : cod_like},// passing the values
			});
	}
}

function changeL16(cod_tel,  cod_like) {
	var k = document.getElementById('dislike16').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike16').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like16').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like16').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like16').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD16(cod_tel,  cod_like) {
	var k = document.getElementById('like16').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like16').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike16').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike16').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike16').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL17(cod_tel, cod_like) {
	var k = document.getElementById('dislike17').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike17').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like17').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like17').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like17').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD17(cod_tel,  cod_like) {
	var k = document.getElementById('like17').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like17').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike17').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike17').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike17').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL18(cod_tel,  cod_like) {
	var k = document.getElementById('dislike18').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike18').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like18').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like18').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like18').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD18(cod_tel,  cod_like) {
	var k = document.getElementById('like18').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like18').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike18').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike18').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike18').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL19(cod_tel,  cod_like) {
	var k = document.getElementById('dislike19').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike19').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like19').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like19').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like19').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD19(cod_tel,  cod_like) {
	var k = document.getElementById('like19').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like19').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike19').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike19').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike19').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL20(cod_tel,  cod_like) {
	var k = document.getElementById('dislike20').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike20').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like20').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like20').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like20').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeD20(cod_tel, cod_like) {
	var k = document.getElementById('like20').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like20').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike20').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike20').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike20').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel,  tip : cod_like},// passing the values
			});
	}
}

function changeL21(cod_tel,  cod_like) {
	var k = document.getElementById('dislike21').src;
	if(k == 'http://localhost/Pagini/CSS/Others/dislike4.svg'){
		document.getElementById('dislike21').src = ('CSS/Others/dislike3.svg');
	}
	
	var l = document.getElementById('like21').src;
	if(l == 'http://localhost/Pagini/CSS/Others/like4.svg') {
		document.getElementById('like21').src = ('CSS/Others/like3.svg');
	} else {
		document.getElementById('like21').src = ('CSS/Others/like4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel, tip : cod_like},// passing the values
			});
	}
}

function changeD21(cod_tel, cod_like) {
	var k = document.getElementById('like21').src;
	if(k == 'http://localhost/Pagini/CSS/Others/like4.svg'){
		document.getElementById('like21').src = ('CSS/Others/like3.svg');
	}
	
	var l = document.getElementById('dislike21').src;
	if(l == 'http://localhost/Pagini/CSS/Others/dislike4.svg') {
		document.getElementById('dislike21').src = ('CSS/Others/dislike3.svg');
	} else {
		document.getElementById('dislike21').src = ('CSS/Others/dislike4.svg');
		$.ajax({
				type : "GET",  //type of method
				url  : "AddLike.php",  //your page
				data : { ID_MOBILE : cod_tel, tip : cod_like},// passing the values
			});
	}
}