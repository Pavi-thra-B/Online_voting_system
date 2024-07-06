<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']== 'POST')
{
  $firstname= $_POST['user'];
   $Aadharnumber= $_POST['aadhar'];
  $nationality=$_POST['nation'];
  
  

  $query="insert into result_login(Name,Aadhar_number,Nationality) values('$firstname','$Aadharnumber','$nationality')";
  mysqli_query($conn,$query);

  header("Location:time.php");
  //action="adminhome.php"
 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result view login</title>
    <style>
        body
{
     font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    text-align: center;
    margin: 150px;
    background-image: url("ovsbackground.jpg");
}
.topic
{
    height:40px;
    width:1200px;
    background-color: rgb(6, 224, 240);
    padding:0px;
    padding-bottom: 30px;
    border-color:black;
    border-radius:10px;
    border-style:double;   
    margin-bottom: 50px;
    margin-top:0px;
}
h1{
   font-display: center;
}
.form
{
    margin-left:400px;
    margin-top:100px;
    height:460px;
    width:300px;
    padding:50px;
    border-radius:30px;
    background-color: white;
    position: center;
}

input[type=text],input[type=number] {
    width: 100%;
    padding: 10px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


.btn {
    background-color: rgb(0, 187, 255);
    color: white;
    padding: 10px 10px;
    margin: 8px ;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
nav {
    flex: 1;
    text-align: center;
  }
  nav ul li {
    list-style: none;
    display: inline-block;
    font-size: 15px;
    font-weight:lighter;
  }
  .option {
    height: 3%;
    display: flex;
    margin-right: 20px;
    align-items: center;
    
  }
.error
{
    background-color:#F2DEDE;
    color:#A94442;
    padding:10px;
    width:95%;
    border-radius:5px;

}
    </style>
</head>
<body>
<div class="topic">
    
    <h1 style="color:black"  >Online Voting System</h1>
   
</div>
  
    <form  method="POST" class="form">
<center>
<h2 style="margin-top: 0px; color:black " >Result view login form</h2>
    <img src="login.png" width="100px" >
    <br>
   <?php 
   if(isset($_GET['error']))
   {
    ?>
    <p class="error"><?php echo $_GET['error'] ?></p>
    <?php
   }
   ?>
   <table>
    <tr>
        <td>      <label for="un"><b>Name</b></label></td>
        <td> <input type="text" placeholder="Enter your Name" name ="user" id="username"></td>

    </tr>
   <tr>
    <td>    <label for="pw"><b>Aadhar No</b></label></td>
    <td>     <input type="text" placeholder="Enter your aadhar No" name ="aadhar" id="aadharno"> </td>

   </tr>
<tr>
    <td> <label for="un"><b>Nationality</b></label></td>
    <td>     <input type="text" placeholder="Enter your Nationality" name ="nation" id="nationality"> </td>
</tr>
   
   </table>
   
    <button type="submit" CLASS="btn">submit</button>
    </div>
    <center>
    
         <div class="option">
        <nav>

       
            <ul>
                <li><h3><a href="home1.html">Home</a></h3></li>
                
            </ul>
        </nav>
    </div>
    </center>
</form>
  </center>
   
    

</body>
</html>
