
function verify(id){

    var editid=id;
    var VIEW=document.getElementById('VIEW').value;
    if(VIEW !=null){
        window.location.replace("../controller/Verifybuyer.php?view="+editid);
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