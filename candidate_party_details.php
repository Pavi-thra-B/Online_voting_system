<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']== 'POST')
{
 $pname=$_POST['pname'];
 $symbol_name=$_POST['symbol'];
 $sig_name=$_POST['sig'];
 $principle=$_POST['principle'];
// $symbol_name=$_FILES['symbol']['name'];
 //$symbol_tmp_name=$_FILES['symbol']['tmp_name'];
 //move_uploaded_file($symbol_tmp_name,"uploads/ $symbol_name");
// $sig_name=$_FILES['sig']['name'];
// $sig_tmp_name=$_FILES['sig']['tmp_name'];
 //move_uploaded_file($sig_tmp_name,"uploads/ $sig_name");


 


  $query="insert into party_register(Partyname,Symbol,Signature,Principles,Vote_count	)
  values('$pname','$symbol_name','$sig_name','$principle',0)";
  mysqli_query($conn,$query);
  header("Location: candidate_pwcreation.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party details</title>
    <link rel="stylesheet" href="./candidatereg.css" />
    <style>
        * {
    margin: 0;
    padding: 0;
    font-family: "Roboto", "sams-serif";
  }
  body
  {
    background-image: url("background3.jpeg");
    
  }
  #formc {
    align-items: center;
    height:1390px;
    width: 600px;
    margin: 10vh auto 0 auto;
    background-color: rgb(143, 210, 236);
    border-radius: 30px;
    padding: 60px;
    
  }
  #form1 {
    align-items: center;
    height:800px;
    width: 600px;
    margin: 10vh auto 0 auto;
    background-color: rgb(143, 210, 236);
    border-radius: 30px;
    padding: 60px;
    
  }
  #home
  {
    margin-top:40px;
  }
  #login
  {
    margin-top:5px;
    margin-bottom:20px;
  }
 
  #topic {
        text-align:center;
        height:45px;
        width:1300px;
        background-color: rgb(6, 224, 240);
        padding:10px;
        border-color:black;
        border-radius:10px;
        margin-left:10px;
        border-style:double;
      
}
  #formc h2 {
    text-align: center;
    color: rgb(9, 94, 105);
    margin-top:2px;
  }
  
#btn {
  border: 1px solid;
  padding: 4px;
  margin: 10px 0px;
  cursor: pointer;
  border-radius: 10px;
  font-size: 20px;
  width: 50%;
  margin-left:150px;
  margin-top: 45px;
  background-color:aqua;
  border:2px solid blue;
  
  }
  .next
  {
    
    border: 1px solid;
    padding: 4px;
    margin: 10px 0px;
    cursor: pointer;
    border-radius: 10px;
    font-size: 20px;
    width: 30%;
    margin-left:200;
    margin-top: 26px;
    background-color:aqua;
    border:2px solid blue;
    
  }
  
  .inputgroup label {
    margin-left: 5%;
    margin-top:30px;
    color: black;
  }
  .inputgroup.error {
    color: rgb(238, 25, 25);
  }
  .inputgroup.error #pw {
    color: rgb(238, 25, 25);
    margin-left: 15%;
  }
  #Principle{
    outline: 0;
    
    font-size: 13px;
    width: 450px;
    height:300px;
    padding: 5px;
    margin-left: 15%;
   
  }
  #personnal
  {
    text-align: right;
    margin-bottom:10px;
  }
  
  .inputgroup input {
    outline: 0;
    display: flex;
    font-size: 13px;
    width: 50%;
    padding: 5px;
    margin-left: 15%;
    margin-bottom:5px;
  }
 
  .inputgroup input:focus {
    outline: 0;
  }
  
  .inputgroup.success input {
    
    border:2px solid rgb(11, 197, 11)
  }
  .inputgroup.error input {
    
    border:2px solid red;
  }
  
  #formc .genderoption {
    display:flex;
    column-gap: 50px;
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 8%;
  }
 
  #formc .genderchoose {
    margin-left: 5%;
  }
  
  #formc h4 {
    text-align: right;
    margin-right: 5%;
  }
  
  #address {
    margin-left: 5%;
  }
  
  .required::after {
    content: " *";
    color: red;
  }

.info #p
  {
  margin-top:10px;
 text-align:center;
 margin-bottom:22px;

  }
  
 #Principle::placeholder 
  {
   text-align:center;
   font-size: 15px;
  }

  
    </style>
    <script defer src="./party.js"></script>
</head>

<body>
<div class="container">
<form method="POST" id="form1"  enctype="multipart/form-data">
  <div class="info" >

    <h4 id="personnal">
        Go to
        <a href="candidate_Registration_ovs.php">Previous page</a >
        </h4>
        <br>
        <hr >
    <h4 id="p">Party details</h4>

<div class="inputgroup">
    <label class="required" for="partyname">Party Name</label>
    <input
      type="text"
      id="pname"
      name="pname"
      placeholder="Enter your party name"
    />
    <div class="error" id="pw"></div>
</div>
<br>
<div class="inputgroup">
    <label class="required" for="partysym">Party symbol</label>
    <input
      type="file"
      id="symbol"
      name="symbol"
     
    />
    
    <div class="error" id="pw"></div>
  </div>
  <br>
  <div class="inputgroup">
    <label class="required" for="sig">Signature</label>
    <input
      type="file"
      id="sig"
      name="sig"
     
    />
    <div class="error" id="pw"></div>
  </div>
<br>
  <div class="inputgroup">
    <label class="required" for="Principles">Principle</label>
   <textarea name="principle" id="Principle" cols="30" rows="10" placeholder="Enter your principles"></textarea>
    <div class="error" id="pw"></div>
</div>
<button id="btn" type="submit">Register</button>
</form>
</div>   

<script>
  const form1 = document.getElementById("form1");
const pname=document.getElementById("pname");
const Principle=document.getElementById("Principle");

var symbol=document.getElementById("symbol");
var sig=document.getElementById("sig");

form1.addEventListener("submit", (e) => {
    if (!validateInputs()) {
      e.preventDefault();
    }
  });

function validateInputs() 
{
let suc = true;
const pnames = pname.value.trim();
const Principles = Principle.value.trim();

var filepath1=symbol.value;
var filepath2=sig.value;

var allowedex=/(\.jpg|\.jpeg|\.png|\.gif|.pdf)$/i;

if(filepath1 === "")
{
  suc=false;
  seterror(symbol,"Symbol must be required");
}
else if(!allowedex.exec(filepath1))
{
  suc=false;
  seterror(symbol,"Provide a valid file type");
}
else{
  setsuccess(symbol);
}

if(filepath2 === "")
{
  suc=false;
  seterror(sig,"Signature must be required");
}
else if(!allowedex.exec(filepath2))
{
  suc=false;
  seterror(sig,"Provide a valid file type")
}
else{
  setsuccess(sig);
}


if (pnames === "") {
    suc = false;
    seterror(pname, "Party name is required");
  } else {
    setsuccess(pname);
  }
  if (Principles === "") {
    suc = false;
    seterror(Principle, "Principles is required");
  } else {
    setsuccess(Principle);
  }
 
 
 
  return suc;
}
function seterror(element, msg) {
  const Inputgroup = element.parentElement;
  const errorelement = Inputgroup.querySelector(".error");
  errorelement.innerText = msg;
  Inputgroup.classList.add("error");
  Inputgroup.classList.remove("success");
}
function setsuccess(element) {
  const Inputgroup = element.parentElement;
  const errorelement = Inputgroup.querySelector(".error");
  errorelement.innerText = "";
  Inputgroup.classList.add("success");
  Inputgroup.classList.remove("error");
}
</script>
</body>
</html>
