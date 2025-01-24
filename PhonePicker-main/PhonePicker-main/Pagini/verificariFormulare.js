

function validareEmail(input) {
  var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (input.match(validRegex)) {
    //document.form1.text1.focus();
    return true;
  } else {
    //document.form1.text1.focus();
    return false;
  }
}

function verificareEmail(email) {
	if(email !== "")
	{
		if(validareEmail(email) == true)
		{
			document.getElementById("email").style.borderColor="black";
			return true;
		}
		else {
			document.getElementById("email").style.borderColor="red";
			document.getElementById("email").placeholder="Acest câmp este obligatoriu";
			document.getElementById("email").focus();
			return false;
		}
	}
	else 
	{
	   document.getElementById("email").style.borderColor="red";
	   document.getElementById("email").placeholder="Acest câmp este obligatoriu";
	   document.getElementById("email").focus();
	   return false;
	}
}

function verificareEmailR(email) {
	if(email !== "")
	{
		if(validareEmail(email) == true)
		{
			document.getElementById("emailR").style.borderColor="black";
			return true;
		}
		else {
			document.getElementById("emailR").style.borderColor="red";
			document.getElementById("emailR").placeholder="Acest câmp este obligatoriu";
			document.getElementById("emailR").focus();
			return false;
		}
	}
	else 
	{
	   document.getElementById("emailR").style.borderColor="red";
	   document.getElementById("emailR").placeholder="Acest câmp este obligatoriu";
	   document.getElementById("emailR").focus();
	   return false;
	}
}

function verificareNume(nume) {
	if(nume !== "")
	{
		document.getElementById("user").style.borderColor="black";
		return true;
	}
	else 
	{
		document.getElementById("user").style.borderColor="red";
		document.getElementById("user").placeholder="Acest câmp este obligatoriu";
		document.getElementById("user").focus();
		return false;
	}
}

function verificarePass(password) {
	if(password !== "")
	{
			//document.getElementById("rez").style.color="white";
			document.getElementById("email").style.borderColor="black";
			document.getElementById("password").style.borderColor="black";
			return true;
	}
	else 
	{
	   //document.getElementById("rez").style.color="red";
	   document.getElementById("password").style.borderColor="red";
	   document.getElementById("password").placeholder="Acest câmp este obligatoriu";
	   document.getElementById("password").focus();
	   return false;
	}
}

function verificarePass1(password1) {
	if(password1.length != 0)
	{
		document.getElementById("password1").style.borderColor="black";
		return true;
	}
	else 
	{
		document.getElementById("password1").style.borderColor="red";
		document.getElementById("password1").placeholder="Acest câmp este obligatoriu";
		document.getElementById("password1").focus();
		return false;
	}
}

function verificarePass2(password2) {
	if(password2.length != 0)
	{
		document.getElementById("password2").style.borderColor="black";
		return true;
	}
	else 
	{
		document.getElementById("password2").style.borderColor="red";
		document.getElementById("password2").placeholder="Acest câmp este obligatoriu";
		document.getElementById("password2").focus();
		return false;
	}
}

function verificareLogin() {
	const email = document.getElementById("email").value;
	const password = document.getElementById("password").value;
	
	if(verificareEmail(email) == true) {
		if(verificarePass(password) == true) {
			return true;
		} else return false;
	} else return false;
}

function verificareRegister() {
	const email = document.getElementById("emailR").value;
	const nume = document.getElementById("user").value;
	const password1 = document.getElementById("password1").value;
	const password2 = document.getElementById("password2").value;
	
	if(verificareEmailR(email) == true) {
		if(verificareNume(nume) == true) {
			if(verificarePass1(password1) == true) {
				if(verificarePass2(password2) == true) {
					if(password1 == password2) {
						// ok
					} else {
						document.getElementById("password2").value = "";
						document.getElementById("password2").style.borderColor="red";
						document.getElementById("password2").placeholder="Parolele nu corespund";
						document.getElementById("password2").focus();
					}
				}
			}
		}
	}
}