<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']== 'POST')
{
  $voterid= $_POST['voterid'];
  $pw= $_POST['password1'];

  $query="insert into voter_login(username,password)  values('$voterid','$pw')";
  $query_run=mysqli_query($conn,$query);
  if($query_run)
  {
   
    header("Location: voterlogin.php");
  }
  
 
 
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration successful</title>
    <style>
body
{
  background-image: url("background3.jpeg");
}
.msg
{
height:70px;
  width: 600px;
  margin: 10vh auto 0 auto;
  background-color: rgb(98, 230, 240);
  border-radius: 20px;
  padding: 5px;
  margin-top:20px;
  border:2px solid darkblue;
 
  
}
#h
{
    
    animation:blow 3s infinite linear;
}
@keyframes blow
{

    0%
    {
        transform:translateY(0) scale(1);
    }
    50%
    {
        transform:translateY(-10px) scale(1.05);
    }
}
.pw
{
  height:500px;
  width: 500px;
  margin: 10vh auto 0 auto;
  background-color:rgb(23, 151, 194);
  border-radius: 10px;
  padding: 10px;
  margin-top:20px;
}
#pw
{
  
  padding:5px;
  border-radius:5px;
  height:20px;
  width:400px;
  margin-left:30px;
  color:black;
  margin-bottom:5px;
}

#repw
{
  
  padding:5px;
  border-radius:5px;
  height:20px;
  width:400px;
  margin-left:30px;
  color:black;
  margin-bottom:5px;
}

#voterid
{
  
  padding:5px;
  border-radius:5px;
  height:20px;
  width:400px;
  margin-left:30px;
  color:black;
  margin-bottom:5px;
}


#btn
{
   
  background-color: blue;
  color: white;
  border: 1px solid;
  padding: 7px;
  margin: 10px 0px;
  cursor: pointer;
  border-radius: 5px;
  font-size: 20px;
  width: 50%;
  margin-left: 100px;
  margin-top:10px;
  
  margin-bottom:50px;
}
.note
{
  height:150px;
  width:500px;
  background-color: rgb(23, 151, 194);
  color:black;
  border: 2px solid;

}

.inputgroup.error #pw1 {
  
  color: rgb(238, 25, 25);
  margin-left: 30px;
}

.inputgroup.success input {
    
    border:2px solid rgb(11, 197, 11)
  }
  .inputgroup.error input {
    
    border:2px solid red;
  }

  #password
  {
    margin-bottom:40px;
  }

    </style>
    
</head>
<body>
  <form  method="POST" id="form">
    <div class="msg" id="h">
        <center><h2>Registration was successfully completed!!</h2></center> 
      
    </div>
    <div class="pw">
       
        <center><h2 id="password">Create Your Password</h2></center>
        <div class="inputgroup">
          <input type="text" id="voterid" name="voterid" placeholder="Enter your voterID number">
          <div class="error" id="pw1"></div>
        </div>
       <div class="inputgroup">
        <input type="text" id="pw" name="password1" placeholder="Create your password">
        <div class="error" id="pw1"></div>
      </div>
      <div class="inputgroup">
        <input type="password" id="repw" name="password2" placeholder="Re enter your password">
        <div class="error" id="pw1"></div>
      </div>
        
      
        <button id="btn" type="submit">Set Password</button>
        <br>
        <div class="note">
        <h4>Note:</h4>
        <p>* Password should be more than 8 letters</p>
        <p>* Password should contain atleast 1 uppercase,1 lowercase <br>
           1 special character and 1 number</p>

        </div>

    </div>
    
  
</body>
</form>
<script>

const form = document.getElementById("form");
const pw = document.getElementById("pw");
const repw= document.getElementById("repw");
const voterid= document.getElementById("voterid");
 form.addEventListener("submit", (e) => {
  if (!validateInputs()) {
    e.preventDefault();
  }
  else{
    alert("Password was created successfully");
  }
});

 function validateInputs() {
  let suc = true;
  const voterids=voterid.value.trim();
  const password = pw.value.trim();
  const repassword = repw.value.trim();


  if (voterids === "") {
    suc = false;
    seterror(voterid, "Voterid number is required");
  } else if (voterids.length < 10 || voterids.length > 10) {
    suc = false;
    seterror(voterid, "Voter ID number must be 10 characters");
  } else {
    setsuccess(voterid);
  }

  if (password === "") {
    suc = false;
    seterror(pw, "Set your password");
  }
  else if(password .length<8 || !checkpass(password) )
  {
    suc = false;
    seterror(pw, "Provide a strong password");
  } 
  else {
    setsuccess(pw);
  }

  if (repassword  === "") {
    suc = false;
    seterror(repw, "Re-enter your password");
  }
  else if(password .length<8 || !checkpass(password) )
  {
    suc = false;
    seterror(repw, "Provide a strong password");
  } 
  else if(password != repassword)
  {
    suc = false;
    seterror(repw, "Type the password correctly");
  } 
  else {
    setsuccess(repw);
  }
  
  

  return suc;
}
function checkpass(pw)
{
  var pass=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,20}$/;
  if(pw.match(pass))
  {
    return true;
  }
  else
  {
    return false;
  }


  
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
</html>
