         

function ajax(){ 

let Product_ID = document.getElementById('Product_ID').value;
let Product_Name=document.getElementById('Product_Name').value;
let Product_Price=document.getElementById('Product_Price').value;
let Product_Made_In=document.getElementById('Product_Made_In').value;
let Entry_Date=document.getElementById('Entry_Date').value;
let student = {'Product_ID' : Product_ID, 'Product_Name': Product_Name , 'Product_Price': Product_Price, 'Product_Made_In': Product_Made_In, 'Entry_Date': Entry_Date};
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
                        if(this.responseText=="Edit successfull."){
                        //header('location: ../view/home.php');
                         window.location.replace("../view/home.php");
                    }
                    }
                }

                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                xhttp.send('data='+json); 

            }
