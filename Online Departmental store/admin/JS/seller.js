function  editSprofiletag(id){

    let editid=id;
    let EDIT=document.getElementById('EDIT').value;
    if(EDIT !=null){
        window.location.replace("update_seller.php?editseller="+editid);
    }

}
function viewSprofiletag(id){

    var editid=id;
    var VIEW=document.getElementById('VIEW').value;
    if(VIEW !=null){
        window.location.replace("viewSellerprofile.php?view="+editid);
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
                  document.getElementById('e1').innerHTML = this.responseText;			
              }
          }
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