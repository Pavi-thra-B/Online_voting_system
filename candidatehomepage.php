<?php
session_start(); 
if (isset($_GET['username'])) {
  
    $usernameFromURL = $_GET['username'];

    echo "Welcome, $usernameFromURL!";
} else {
    echo "Username not found in the URL.";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate_Home_Page</title>
    <style>
        body {
            background-image: url(img1.jpg);
        }
        nav {
            border-style: double;
            border-color: black;
            color: black;
            background-color: rgb(6, 224, 240);
            padding: 5px;
            border-radius: 10px;   
        }
        .head_nav {
            margin-left: 80%;
        }
      .head li,h1,ul{
            display: inline;
        }
        li {
            font-size: 1.5em;
        }
        .links-container {
            margin:55px;
            display: flex;
            justify-content: space-between;
        }
        .links{
            width:30%; /* Adjust the width as needed */
            margin-top: 55px;
            margin-bottom: 40px;
            margin:40px;
            background-color: rgb(6, 224, 240);
            color: black;
            padding: 10px 10px 10px;
            font-size: 1.1em;  
            border-radius: 10px; 
            border: black solid;
            box-shadow: 10px;
        }
       
        .links ul, li{
            display: inline;
        }
        
        .my_profile{
            width: 100%;
            display: inline;
            margin: 5%;
        }
        .update_cre{
            width: 100%;
            display: inline;
            margin: 20px;
        }
    </style>
   </head>
<body>
    <div class="head">
        <nav>
            <h1> Online Voting System</h1>
            <ul class="head_nav">
               
                <li><a href="home1.html">Logout</a></li>
            </ul>    
        </nav>
    </div>
    <div class="links-container">
        <div class="links">
            <ul class="body_nav">
                <div class="my_profile">
                <li><a href="candgetdetails.php?username=<?php echo urlencode($usernameFromURL); ?>"><img src="my_profile.jpg"><br><center>Candidate Profile</center></a></li>
                </div>
            </ul>
        </div>
    
        <div class="links">
            <ul class="body_nav">
                <div class="update_cre">
                <li><a href="update_cand_password.php?username=<?php echo urlencode($usernameFromURL); ?>"><img src="credential.jpg"><br><center>Update Password</center></a></li>
                </div>
            </ul>
        </div>
    </div>
</body>
</html>
