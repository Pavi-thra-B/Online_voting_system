<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
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
    height:420px;
    width:300px;
    padding:50px;
    border-radius:30px;
    background-color: white;
    position: center;
}

input[type=text], input[type=password] {
    width: 50%;
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
    
    margin-bottom: 10px;
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
  
    <form action="adminlogincheck.php" method="POST" class="form">
<center>
<h2 style="margin-top: 0px; color:black " >Admin login form</h2>
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
     <label for="un"><b>Username</b></label>
   
    <input type="text" name ="user" id="username">
    <br>
    <label for="pw"><b>Password</b></label>
    <input type="password" name ="pass" id="password">
    <br><br>
    <button type="submit" CLASS="btn">submit</button>
    </div>
         <div class="option">
        <nav>
            <ul>
               <center> <li><h3><a href="home1.html">Home</a></h3></li></center>
              <!--  <li><h3>|</h3></li>
                <li><h3><a href="forgotpwd.html">Forgot password ?</a></h3></li>-->
            </ul>
        </nav>
    </div>
</form>
  </center>
   
    

</body>
</html>
