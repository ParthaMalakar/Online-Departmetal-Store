
 function buyervalidate(){

var username = document.getElementById('username').value;
var age = document.getElementById('age').value;
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
   if(age == ""){
    document.getElementById('a').innerHTML = "id can't left empty";
    //return false;
  }

  if(id == ""){
    document.getElementById('r').innerHTML = "id can't left empty";
    //return false;
  }

  if(password == ""){
    document.getElementById('t').innerHTML = "password can't left empty";
    //return false;
  }

  if(Pnumber == ""){
    document.getElementById('h').innerHTML = "Pnumber can't left empty";
    //return false;
  }

  if(email == ""){
    document.getElementById('m').innerHTML = "email can't left empty";
    //return false;
  }

  if(dob == ""){
    document.getElementById('l').innerHTML = "email can't left empty";
    return false;
  }
else{
    return true;
  }


}         
function ajax(){ 

let username = document.getElementById('username').value;
let age = document.getElementById('age').value;
let id=document.getElementById('id').value;
var password=document.getElementById('password').value;
let Pnumber=document.getElementById('Pnumber').value;
let email=document.getElementById('email').value;
let dob=document.getElementById('dob').value;
let student = {'username' : username,'age' :age, 'id': id , 'password': password, 'Pnumber': Pnumber, 'email': email, 'dob': dob};
 let json = JSON.stringify(student);
  let xhttp = new XMLHttpRequest();
                
                
                xhttp.open('POST','../controller/addbuyercheck.php', true);
                xhttp.onreadystatechange = function (){                    
                    if(this.readyState == 4 && this.status == 200){
                        
                        alert(this.responseText);
                        if(this.responseText=="Buyer add successfull."){
                     
                         window.location.replace("../view/home.php");
                    }
                    }
                }

                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                xhttp.send('data='+json); 

            }
     
