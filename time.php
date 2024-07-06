<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ovs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT set_time FROM admin_login WHERE username='admin'";

$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $fixedTime = $row['set_time'];
    //echo "Fetched Value: " . $fixedTime;
} else {
    echo "Error: " . $conn->error;
}
$conn->close();

date_default_timezone_set('Asia/Kolkata');
$currentTimestamp= date('y-m-d H:i:s');
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
        h1{
          
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


        table, td, th {
               border: 3px solid black;
               /*background-color: #f2f2f2;*/
         }
         th{
            background-color: blue;
            font-weight:bold;
             color:white;
             height:55px;

         }
         h4{
            color:red;
         }


        .bgg
        {
            margin-left:400px;
            margin-top:50px;
            height:220px;
            width:700px;
            padding:20px;
            border-radius:30px;
            background-color: rgb(6, 224, 240);
            position: center;
            border-style:double;
            border-color:black;
            border-radius:10px;  
            color:black;
            font-size:25px;
        }
        .hd
        {
            margin-left:400px;
            margin-top:30px;
            height:50px;
            width:600px;
            padding:20px;
            border-radius:30px;
            background-color: rgb(6, 224, 240);
            position: center;
            border-style:double;
            border-color:black;
            border-radius:10px;  
            color:black;
            font-size:25px;
        }
        mark {
                background-color: rgb(6, 224, 240);
                color: #00008B;
            }
      
        </style>
        
 
</head>
<body>
    <div class="head">
        <nav>
            <h1> ONLINE VOTING SYSTEM</h1>
            
            <ul >
                <li ><a href="adminhome.php">Home</a></li>
                <li>|</li>
                <li><a href="home1.html">Logout</a></li>
            </ul>    
        </nav>     
    </div>

    <div class="bgg">
    <center><h3>The result is yet to be released!</h3></center>
    <center><h4><?php echo "The release time of the result is {$fixedTime}";?></h4></center>
               <?php 
                
                $remainingTime = strtotime($fixedTime) - strtotime($currentTimestamp);
                 //echo "The release time of the result is {$fixedTime}";

                if ($remainingTime > 0) {
                    $remainingHours = floor($remainingTime / 3600);
                    $remainingMinutes = floor(($remainingTime % 3600) / 60);
                    $remainingSeconds = $remainingTime % 60;

                    //echo "\nResults will be released within {$remainingHours} hours, {$remainingMinutes} minutes, {$remainingSeconds} seconds";
                } else {
                    echo
                    "
                    <script>
                    alert('Welcome to the result page');
                    document.location.href='result_home.php';
                    </script>
                    ";
                   // echo "The fixed time has passed.";
                }
               ?>
        <center><h5>Results will be released within<mark><?php echo" {$remainingHours} HOURS, {$remainingMinutes} MINUTES, {$remainingSeconds} SECONDS"?></mark></h5></center>

        
    </div>

                        
    
</body>
 </html>