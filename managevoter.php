<?php
session_start();
include("db.php");

$query="select * from voter_register";
$query_run = mysqli_query($conn,$query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Voter</title>
    <style>

body
{
  background-image: url("background3.jpeg");
}
table,th,td
{
    border:2px solid black;
    border-collapse:collapse;
}

.topic
{
    
    color:white;
    background-color: blue;
}
.space
{
    margin-top:40px;
}
table{
    width:100%;
    height:150px;
    text-align: center;
    background-color: skyblue;
}

td{
    vertical-align: middle;
}
.btn 
{
    width:50px;
    height:25px;
    background-color:white;
    border:2px solid darkblue;
    color:black;
    padding:5px;
    border-radius:5px;
    margin-top:5px;
}
.btn:hover{
    background-color: darkred;
    color:black;
}

.topic1
{
  
    height:45px;
    width:1320px;
    background-color: rgb(6, 224, 240);
    padding:10px;
    border-color:black;
    border-radius:10px;
    margin-left:10px;
    border-style:double;
  
   
    
}
#h
{
    margin-top:1px;
}
nav {
    flex: 1;
    text-align: right;
   
  }
  nav ul li {
    list-style: none;
    display: inline-block;
    font-size: 13px;
    font-weight:lighter;
  }
.option {
    height: 3%;
    display: flex;
    align-items: center;
    margin-top:10px;
  }
  #title
  {
    width:150px;
    height:20px;
    background-color:black;
    color:white;
    padding:7px;
    border-radius:3px;
  }

  #msg
  {
    color:darkgreen;
    font-size: 20px;

  }

    </style>
</head>
<body>

<div class="topic1">
           
           <h3 id="h">Online Voting System</h3>
           <div class="option">
               <nav>
                   <ul>
                       <li><h3><a href="adminhome.php">Home</a></h3></li>
                       <li><h3>|</h3></li>
                       <li>  <h3><a href="home1.html">Logout</a></h3></li>
                   </ul>
               </nav>
               
             
   
           </div>
       </div>
      
    <center class="space">
        <form action="" method="POST" enctype="multipart/form-data">
            <h3 id="title">Voter Information</h3>
            <table width="50%" cellpadding="5" cellspacing="5">
                <thead>
                        <tr class="topic">
                                <th>S.NO.</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>VoterID number</th>
                                <th>Aadhar number</th>
                                <th>DOB</th>
                                <th> Age </th>
                                <th>Gender</th>
                                <th>Phone number</th>
                                <th> Email address</th>
                                <th>D/NO.</th>
                                <th>Street</th>
                                <th>City</th>
                                <th>Pincode</th>
                                <th>Nationality</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>Action</th>
                        </tr>
                </thead>

               <?php 
                    
                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>
                        <tr>
                        <td><?php echo $row['Serial_num'] ?></td>
                                <td><?php echo $row['Firstname'] ?></td>
                                <td><?php echo $row['Lastname'] ?></td>
                                <td><?php echo $row['VoterID_number'] ?></td>
                                <td><?php echo $row['Aadhar_number'] ?></td>
                                <td><?php echo $row['DOB'] ?></td>
                                <td><?php echo $row['Age']  ?></td>
                                <td><?php echo $row['Gender'] ?></td>
                                <td><?php echo $row['Phone_number'] ?></td>
                                <td><?php echo $row['Email'] ?></td>
                                <td><?php echo $row['Door_number'] ?></td>
                                <td><?php echo $row['Street'] ?></td>
                                <td><?php echo $row['City'] ?></td>
                                <td><?php echo $row['Pincode'] ?></td>
                                <td><?php echo $row['Nationality'] ?></td>
                                <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['Photo']).'   "  alt="img" style="width:100px; height:150px;">';?></td>
                                <td><?php echo $row['Status'] ?></td>
                                <td><button class="btn"><a href="voterdelete.php?id=<?php echo $row['Serial_num']; ?>">Delete</a></button></td>
                                
                        </tr>
                        <?php

                    }
               ?>

               
            </table>
        </form>
    </center>
   
</body>
</html>
