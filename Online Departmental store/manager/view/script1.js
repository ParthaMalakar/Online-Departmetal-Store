

function validate(){

	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var id=document.getElementById('id').value;
	var password=document.getElementById('password').value;
	let confirm=document.getElementById('confirm').value;
	let Pnumber=document.getElementById('Pnumber').value;
	let email=document.getElementById('email').value;
	let dob=document.getElementById('dob').value;
	
	//document.write('hbsdsabd');

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

function Sellervalidate(){

var username = document.getElementById('username').value;
var id=document.getElementById('id').value;
var password=document.getElementById('password').value;
let Pnumber=document.getElementById('Pnumber').value;
let email=document.getElementById('email').value;
let dob=document.getElementById('dob').value;
	
	//document.write('hbsdsabd');

	if(username == ""){
		document.getElementById('p').innerHTML = "username can't left empty";
		//return false;

	}

	if(id == ""){
		document.getElementById('a').innerHTML = "id can't left empty";
		//return false;
	}

	if(password == ""){
		document.getElementById('r').innerHTML = "password can't left empty";
		//return false;
	}

	if(Pnumber == ""){
		document.getElementById('t').innerHTML = "Pnumber can't left empty";
		//return false;
	}

	if(email == ""){
		document.getElementById('h').innerHTML = "email can't left empty";
		//return false;
	}

	if(dob == ""){
		document.getElementById('doba').innerHTML = "email can't left empty";
		return false;
	}
else{
		return true;
	}


}
           
		 	function ajax(){ 
 let username = document.getElementById('username').value;
let id=document.getElementById('id').value;
let password=document.getElementById('password').value;
let Pnumber=document.getElementById('Pnumber').value;
let email=document.getElementById('email').value;
let dob=document.getElementById('dob').value;
                let student = {'username' : username, 'id': id , 'password': password, 'Pnumber': Pnumber, 'email': email, 'dob': dob};
                let json = JSON.stringify(student);

                let xhttp = new XMLHttpRequest();
                // xhttp.open('GET','usercheck.php?username='+username, true);
                // xhttp.onreadystatechange = function (){                    
                //     if(this.readyState == 4 && this.status == 200){
                //         //alert(this.responseText);
                //         document.getElementById('head').innerHTML = this.responseText;
                //     }
                // } 
                // xhttp.send();
                
                xhttp.open('POST','../controller/addsellercheck.php', true);
                xhttp.onreadystatechange = function (){                    
                    if(this.readyState == 4 && this.status == 200){
                        //let student = JSON.parse(this.responseText);
                        //document.getElementById('head').innerHTML = student.username;
                        alert(this.responseText);
                        if(this.responseText=="Buyer Edit successfull."){
                         window.location.replace("home.php");
                    }
                    }
                }

                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                xhttp.send('data='+json); 

            }
		 


    function editselleradmin(){
	  let username=document.getElementById('username').value;
      let id=document.getElementById('id').value;
      let password=document.getElementById('password').value;
      let phonenumber=document.getElementById('phonenumber').value;
      let email=document.getElementById('email').value;
      let dob=document.getElementById('dob').value;

      
   
      let submit=document.getElementById('editseller').value;
     
      let json = {
      	'username':username,
        'id':id,
        'password':password,
        'phonenumber':phonenumber,
        'email':email,
        'dob':dob,
       
        };
        let data = JSON.stringify(json); 
  
     if(username != null && id != null && password != null && phonenumber != null && email != null && dob != null){
      let xhttp1 = new XMLHttpRequest();
    
                xhttp1.open('POST', '../controller/UpdateSelleradmin.php', true);
                xhttp1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp1.send('editseller='+submit+'&data='+data);
    
                xhttp1.onreadystatechange = function (){
    
                    if(this.readyState == 4 && this.status == 200){
                        alert(this.responseText);
                        if(this.responseText=="Seller Edit successfull."){
                            window.location.replace("seller_list.php");
                        }
                    }
                }
            
            }
            else{
                return false;
            }
    }