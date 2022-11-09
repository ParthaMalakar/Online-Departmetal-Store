
function validate(){

	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var id=document.getElementById('id').value;
	var password=document.getElementById('password').value;
	let confirm=document.getElementById('confirm').value;
	let Pnumber=document.getElementById('Pnumber').value;
	let email=document.getElementById('email').value;
	let dob=document.getElementById('dob').value;
	
	

	if(username == ""){
		document.getElementById('p').innerHTML = "username can't left empty";
		return false;

	}else if(id == ""){
		document.getElementById('a').innerHTML = "id can't left empty";
		return false;
	}else if(password == ""){
		document.getElementById('r').innerHTML = "password can't left empty";
		return false;
	}else if(confirm == ""){
		document.getElementById('t').innerHTML = "empty";
		return false;
	}else if(Pnumber == ""){
		document.getElementById('h').innerHTML = "Pnumber can't left empty";
		return false;
	}else if(email == ""){
		document.getElementById('eemail').innerHTML = "email can't left empty";
		return false;
	}else if(dob == ""){
		document.getElementById('doba').innerHTML = "Pnumber can't left empty";
		return false;
	}else{
		return true;
	}


}