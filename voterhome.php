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
    <title>VOTER HOME PAGE</title>
    <link rel="stylesheet" href="voterhome.css">
</head>
<body>
    <div class="container">
        <div class="topic">
           
            <h3 id="h">Online Voting System</h3>
            <div class="option">
                <nav>
                    <ul>
                       
                        <li>  <h3><a href="home1.html">Logout</a></h3></li>
                    </ul>
                </nav>
                
              
    
            </div>
        </div>
        <div class="alloptions">
            <div class ="profile">
                <div class="content1">
                    <img src="profile.png" alt="profile">
                    <a href="getdetails.php?username=<?php echo urlencode($usernameFromURL); ?>"><h3 id="info1"><button class="btn">My Profile</button></h3></a>
                </div>
                
            </div>
            <div class ="vast">
                <div class="content2">
                    <img src="vote.png" alt="vote">
                    <a href="votecast.php?username=<?php echo urlencode($usernameFromURL); ?>"><h3  id="info2"><button class="btn">Vote Cast</button></h3></a>
                </div>
                
            </div>
            
            <div class ="update">
                <div class="content3">
                    <img src="update.png" alt="update">
                    <a href="update_voter_password.php?username=<?php echo urlencode($usernameFromURL); ?>"><h3  id="info3"><button class="btn">Update Credentials</button></h3></a>
                </div>
                
            </div>
            <div class ="candidate">
                <div class="content4">
                    <img src="cand.png" alt="candidate">
                    <a href="candidate_list.php?username=<?php echo urlencode($usernameFromURL); ?>"><h3  id="info4"><button class="btn">Candidates List</button></h3></a>
                </div>
                
            </div>
        </div>
        
       
    </div>
   

    
</body>
</html>
