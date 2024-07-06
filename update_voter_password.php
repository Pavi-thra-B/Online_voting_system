<?php
session_start();
include("db.php");
//echo "<script type='text/javascript'>alert('Hello')</script>";


if($_SERVER['REQUEST_METHOD']== 'POST')
{
    $u= $_POST['u'];//username
    $a= $_POST['a'];//new password
    $o=$_POST['o'];
    $b=$_POST['b'];

   /*$query = "UPDATE updpass SET Password=? WHERE Username=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $u, $a);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);*/

 $query="UPDATE voter_login SET password='$a' where username='$u'";
 mysqli_query($conn,$query);
}

$home="homepage";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Update password</title>
    <style>
        body{
                   
            background-image:url(img1.jpg);
        }
        .field{
            width:400px;
            margin:auto;
            margin-top: 40px;
            margin-bottom: 40px;
            background-color:rgb(6, 224, 240);
            color:black;
            padding:10px 20px 30px;
            font-size:1.1em;  
            border-radius:10px;         
        
        
        }
        input[type=submit], input[type=button] {
                    background-color: navy;
                    border: none;
                    color: white;
                    padding: 7px 14px;
                    text-decoration: none;
                    margin: 2px 1px;
                    cursor: pointer;
                   }
        .label{
        padding: 5px;
        }
        h2{
            color:black;
            text-align: center;
        }
        
        div{
            margin:8px;
          
        }
        
        .inp{
            margin-left: 5px;
            width:99%;
            font-size:80%;
            border: 1px solid blue;
            padding:8px 10px;
            border-radius: 7px;
            display:block;
            box-shadow:5px;
            box-sizing: border-box;
        }
        .btn{
            text-align: center;
           padding:10px;
         
        }
        button{
            text-align:center;
            border-radius:1px;
            padding:0px;
            
        }
        nav{
            border-style:double;
            border-color:black;
            color:black;
            background-color:rgb(6, 224, 240);
            padding:5px;
            border-radius:10px;   
        
        }
        ul{
            margin-left:80%;
        }
        
        li,h1{
            display:Inline;
        }
        li{
            font-size:1.5em;
        }
        .bot{
                color:black;
                padding: 10px;
            }
      
        </style>
                

</head>
<body>
    <div class="head">
        <nav>
            <h1> Online Voting System</h1>
            
            <ul >
                <li ><a  href="voterhome.php?username=<?php echo urlencode($home)?>">Home</a></li>
                <li>|</li>
                <li><a href="home1.html">Logout</a></li>
            </ul>    
        </nav>
        
         
    </div>
   
    <fieldset class="field">
        <b>
            <legend> <h2 text-align: center>Update password </h2></legend>
               
            
        </b>
        
        <form method="POST" class="form">
            <div>
                <label class="label">Username:</label>
                <input class="inp" type="text" id="u" name="u" placeholder="Enter your username" >
            </div>
            <div>
                <label class="label">Old password:</label>
                <input class="inp" type="text" id="o" name="o" placeholder="Enter old password" >
            </div>
            <div>
                <label class="label">New password:</label>
                <input  class="inp" type="password" id="a" name="a" placeholder="Enter new password" >
                
            </div>
            <div>
                <label class="label">Confirm password:</label>
                <input  class="inp" type="password" id="b" name="b" placeholder="Enter confirm password">
                
            </div>
            <input type="checkbox" onclick="myFunction()">Show Password
            <div>
                <p id="message"></p>
                <p id="show"></p>
            </div>
            <div class="btn">
               <center><input type="submit" onclick="matchPassword()" value="submit"></center>
              <!-- <button onclick="matchPassword()">submit</button>-->
            </div>
            
            
        </form>
    </fieldset>
    <div class="head">
        <nav>
        <h3 style="color:Black"><u>Note:</u></h3>
       ->Make sure that your new password should contain atleast 1 uppercase,1 lowercase,1 number and 1 special character.<br>
       ->Make sure that your password should be more than 8 characters.<br>
     ->Make sure that your new password and confirm password should be same.<br>
     ->Make sure that yout new password should not be your old password.<br>
    ->The confirmation message will be sent to your respective email id.<br><br>
        
    </nav>
    </div>
    
    
</body>
<script>
    function myFunction() {
  var x = document.getElementById("a");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  var y = document.getElementById("b");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
    function matchPassword(){
        let newPass=document.getElementById("a").value;
        let confPass=document.getElementById("b").value;
        let oldPass=document.getElementById("o").value;
       // console.log("Password:",a,'\n',"Confirm Pass");
        let message=document.getElementById("message");
    if(oldPass!=newPass)
    {
        if(newPass.length>=3)
        {
            if(newPass==confPass)
            {
            message.textContent="";
            message.style.backgroundColor="lime";
              if(newPass.match(/[0-9]/))
              {
                message.textContent="";
                if(newPass.match(/[A-Z]/))
                {
                    message.textContent="";
                    if(newPass.match(/[a-z]/))
                    {
                        message.textContent="";
                        if(newPass.match(/[!\@\#\$\%^\&\*\(\)\-\+\_\=\,\.]/))
                        {
                            message.textContent="Password ready to update";
                            message.style.backgroundColor="lime";

                        }
                        else{
                            message.textContent="Your password should contain atleast 1 special character.";
                            message.style.backgroundColor="red";
                        }
                    }
                    else
                    {
                       message.textContent="Your password should contain atleast 1 lowercase letter.";
                       message.style.backgroundColor="red";
                    }
                }
                else
                {
                    message.textContent="Your password should contain atleast 1 uppercase letter.";
                    message.style.backgroundColor="red";
                }
              }
               else
              {
                message.textContent="Your password should contain atleast 1 number";
                message.style.backgroundColor="red";
              }
            }
            else
            {
            message.textContent="Password didn't match";
            message.style.backgroundColor="red";
            }
            
            
         
          
          
        }
        else
        {
            message.textContent="Password should contain alteast 8 characters";
            message.style.backgroundColor="red";
        }
     /*  if(a.value.match(/[0-9]/)){
        message.textContent="containing number";
           }
    
       else{
              message.textContent="Your password should contain atlest 1 number";
           }*/

        }
       
    
    else
    {
        message.textContent="Your new password should not be your old password";
    }
      
}    
</script>
</html>


<div class="bd-dark">
         <div class="container">
             <div class="row">
                <div class="col">
                   <div class="card mt-5">
                       <div class="card-header">

                       </div>
                    </div>
                </div>
            </div>
         </div>

     </div>
