

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
               
                
                xhttp.open('POST','../controller/addmanagercheck.php', true);
                xhttp.onreadystatechange = function (){                    
                    if(this.readyState == 4 && this.status == 200){
                       
                        alert(this.responseText);
                        if(this.responseText=="Manager Edit successfull."){
                        //header('location: ../view/home.php');
                         window.location.replace("../view/home.php");
                    }
                    }
                }

                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                xhttp.send('data='+json); 

            }

function Sellervalidate(){

var username = document.getElementById('username').value;
var id=document.getElementById('id').value;
var password=document.getElementById('password').value;
let Pnumber=document.getElementById('Pnumber').value;
let email=document.getElementById('email').value;
let dob=document.getElementById('dob').value;
    
   

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