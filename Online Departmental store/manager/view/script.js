
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
                        //header('location: ../view/home.php');
                         window.location.replace("../view/home.php");
                    }
                    }
                }

                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                xhttp.send('data='+json); 

            }
function managerajax(){ 

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
                
                xhttp.open('POST','../controller/addmanagercheck.php', true);
                xhttp.onreadystatechange = function (){                    
                    if(this.readyState == 4 && this.status == 200){
                        //let student = JSON.parse(this.responseText);
                        //document.getElementById('head').innerHTML = student.username;
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
function buyerajax(){ 

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
                // xhttp.open('GET','usercheck.php?username='+username, true);
                // xhttp.onreadystatechange = function (){                    
                //     if(this.readyState == 4 && this.status == 200){
                //         //alert(this.responseText);
                //         document.getElementById('head').innerHTML = this.responseText;
                //     }
                // } 
                // xhttp.send();
                
                xhttp.open('POST','../controller/addbuyercheck.php', true);
                xhttp.onreadystatechange = function (){                    
                    if(this.readyState == 4 && this.status == 200){
                        //let student = JSON.parse(this.responseText);
                        //document.getElementById('head').innerHTML = student.username;
                        alert(this.responseText);
                        if(this.responseText=="Buyer add successfull."){
                        //header('location: ../view/home.php');
                         window.location.replace("../view/home.php");
                    }
                    }
                }

                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                xhttp.send('data='+json); 

            }
		 
function viewSprofiletag(id){

    var editid=id;
    var VIEW=document.getElementById('VIEW').value;
    if(VIEW !=null){
        window.location.replace("viewSellerprofile.php?view="+editid);
    }
}
function verify(id){

    var editid=id;
    var VIEW=document.getElementById('VIEW').value;
    if(VIEW !=null){
        window.location.replace("../controller/Verifybuyer.php?view="+editid);
    }
}

function  editSprofiletag(id){

    let editid=id;
    let EDIT=document.getElementById('EDIT').value;
    if(EDIT !=null){
        window.location.replace("update_seller.php?editseller="+editid);
    }

}
function blockseller(i){
  let id=i;
  let BLOCKt= document.getElementById('BLOCK').value;
  
  let confirmAction = confirm("Are you sure to execute this action?");
    if (confirmAction){

    let xhttp2 = new XMLHttpRequest();
  
              xhttp2.open('POST', '../controller/blockcheck.php', true);
              xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xhttp2.send('block='+BLOCKt+'&id='+id);
  
              xhttp2.onreadystatechange = function (){
  
                  if(this.readyState == 4 && this.status == 200){
                      alert(this.responseText);
                      if(this.responseText=="block successfull..."){
                          //window.location.reload("../view/Block_Sellerl.php");
            }
         }
      }

    }
    else{
      alert("Action canceled");
  }
}
function blockbuyer(i){
  let id=i;
  let BLOCKt= document.getElementById('BLOCK').value;
  
  let confirmAction = confirm("Are you sure to execute this action?");
    if (confirmAction){

    let xhttp2 = new XMLHttpRequest();
  
              xhttp2.open('POST', '../controller/buyerBlock.php', true);
              xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xhttp2.send('block='+BLOCKt+'&id='+id);
  
              xhttp2.onreadystatechange = function (){
  
                  if(this.readyState == 4 && this.status == 200){
                      alert(this.responseText);
                      if(this.responseText=="block successfull..."){
                         window.location.reload("../view/blockbuyer.php");
            }
         }
      }

    }
    else{
      alert("Action canceled");
  }
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

function serchseller(){
  let search=document.getElementById('search').value;
  let submit=document.getElementById('submit').value;



  if(search==""){
    document.getElementById('e').innerHTML="please check search box";
    return false;
  }
  else{
    document.getElementById('e').innerHTML=null;
    //return true;
  }
  
  if(search!=null){
  let xhttp2 = new XMLHttpRequest();

          xhttp2.open('POST','../controller/SearchCheck.php', true);
          xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp2.send('btn='+submit+'& search='+search);

          xhttp2.onreadystatechange = function (){

              if(this.readyState == 4 && this.status == 200){
                  document.getElementById('e1').innerHTML = this.responseText;			}
          }
        }
}
function serchbuyer(){
  let search=document.getElementById('search').value;
  let submit=document.getElementById('submit').value;



  if(search==""){
    document.getElementById('e').innerHTML="please check search box";
    return false;
  }
  else{
    document.getElementById('e').innerHTML=null;
    //return true;
  }
  
  if(search!=null){
  let xhttp2 = new XMLHttpRequest();

          xhttp2.open('POST','../controller/seachBuyercheck.php', true);
          xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp2.send('btn='+submit+'& search='+search);

          xhttp2.onreadystatechange = function (){

              if(this.readyState == 4 && this.status == 200){
                  document.getElementById('e1').innerHTML = this.responseText;      }
          }
        }
}
function blockseller(i){
  let ID=i;
  let BLOCKt= document.getElementById('Block').value;
  
  let confirmAction = confirm("Are you sure to execute this action?");
    if (confirmAction){

    let xhttp2 = new XMLHttpRequest();
  
              xhttp2.open('POST', '../controller/blockcheck.php', true);
              xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xhttp2.send('block='+BLOCKt+'&id='+ID);
  
              xhttp2.onreadystatechange = function (){
  
                  if(this.readyState == 4 && this.status == 200){
                      alert(this.responseText);
                      if(this.responseText=="block successfull..."){
                          window.location.reload("../view/Block_Seller.php");
            }
         }
      }

    }
    else{
      alert("Action canceled");
  }
}

function unblock(i){
  let id=i;
  let unblock=document.getElementById('UNBLOCK').value;

  let xhttp2 = new XMLHttpRequest();
    
    xhttp2.open('POST', '../controller/unblock_check.php', true);
    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp2.send('unblock='+unblock+'&id='+id);

    xhttp2.onreadystatechange = function (){

        if(this.readyState == 4 && this.status == 200){
            alert(this.responseText);
            if(this.responseText=="Unblock successfully."){
                window.location.reload("../view/BlockList_and_Unblock.php");
            }
    }
    }

}
function Buyerunblock(i){
  let id=i;
  let unblock=document.getElementById('UNBLOCK').value;

  let xhttp2 = new XMLHttpRequest();
    
    xhttp2.open('POST', '../controller/unblockbuyer_check.php', true);
    xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp2.send('unblock='+unblock+'&id='+id);

    xhttp2.onreadystatechange = function (){

        if(this.readyState == 4 && this.status == 200){
            alert(this.responseText);
            if(this.responseText=="Unblock successfully."){
                window.location.reload("../view/BlockList_for_buyer.php");
            }
    }
    }

}
