<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <style>
        body {
            background-image: url(img1.jpg);
           /* background-repeat: no-repeat;*/
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
            margin:75px;
            display: flex;
            justify-content: space-around;
        }
        .links{
            width:20%; /* Adjust the width as needed */
            margin-top: 55px;
            margin-bottom: 40px;
            margin:40px;
            background-color: rgb(6, 224, 240);
            color: black;
            padding: 1px 1px 1px;
            font-size: 0.85em;  
            border-radius: 10px; 
            border: black solid;
            box-shadow: 20px;
        }
      /*  img {
                border-radius: 50%;
               /* background-color:powderblue;

            }*/
       
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
        .manage_voter{
            width: 100%;
            display: inline;
            margin: 20px;
        }
    </style>
   </head>
<body>
    <div class="head">
        <nav>
            <h1> Online Voting System:Admin page</h1>
            <ul class="head_nav">
                <li><a href="home1.html">Logout</a></li>
            </ul>    
        </nav>
    </div>
    
    <div class="links-container">
        <div class="links">
            <ul class="body_nav">
                <div class="my_profile">
                    <li><a href="result.php"><center><img src="res4.png" width="125" height="125"></center><br><center>Release Result</center></a></li>
                </div>
            </ul>
        </div>
    
        <div class="links">
            <ul class="body_nav">
                <div class="manage_voter">
                    <li><a href="managevoter.php"><center><img src="new.png" width="125" height="125"></center><br><center>Manage Voters</center></a></li>
                </div>
            </ul>
        </div>

        <div class="links">
            <ul class="body_nav">
                <div class="manage_voter">
                    <li><a href="managecandidate.php"><center><img src="new.png" width="125" height="125" ></center><br><center>Manage Candidates</center></a></li>
                </div>
            </ul>
        </div>
    </div>
</body>
</html>
