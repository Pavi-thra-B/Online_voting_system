<?php
session_start();
include("db.php");

if (isset($_GET['username'])) {
  $cid = $_GET['username'];
}

$query="select * from voter_register where VoterID_number ='$cid'";
$result=mysqli_query($conn,$query);
//$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>

body
{
  background-image: url("background3.jpeg");
}
#h
{
    margin-top:1px;
}

#title
{
    color:darkblue;
}
.topic1
{
  
    height:50px;
    width:1320px;
    background-color: rgb(6, 224, 240);
    padding:10px;
    border-color:black;
    border-radius:10px;
    margin-left:10px;
    border-style:double;
  
   
    
}
.data
{
    margin-left:380px;
    margin-top:30px;
    width:500px;
    height: 630px;
    background-color: aqua;
    border:2px solid darkblue;
    padding:10px;
    border-radius:5px;
    

}

.option {
    height: 3%;
    display: flex;
    align-items: center;
    margin-top:10px;
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
  .img
  {
    margin-top:5px;
    margin-right:40px;
    float:right;
    border:2px black solid;
  }
  .detail
  {
    margin-top:10px;
    margin-left:40px;
    
  }
  .btn
  {
    float:left;
    margin-left:30px;
    width:20%;
    padding:8px;
    height:30px;
    background-color: darkblue;
    border:2px solid darkblue;
    color:white
  }

    </style>
</head>
<body>
<div class="topic1">
           
           <h3 id="h">Online Voting System</h3>
           <div class="option">
               <nav>
                   <ul>
                       <li><h3><a href="voterhome.php?username=<?php echo urlencode($cid)?>">Home</a></h3></li>
                       <li><h3>|</h3></li>
                       <li>  <h3><a href="home1.html">Logout</a></h3></li>
                   </ul>
               </nav>
               
             
   
           </div>
</div>
<div class="data">
<form action="edit_voter.php" method="POST" enctype="multipart/form-data">
   <center><h3 id="title">My Profile<h3></center> 
   <hr>
    <?php 
                    
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>
                        
                          <div class="detail">
                            <td> <?php echo '<img class="img" src="data:image;base64,'.base64_encode($row['Photo']).'   "  alt="img" style="width:150px; height:200px;">';?></td><br>
                            <td  id="h1"><b>Firstname :</b></td>
                                <td><?php echo $row['Firstname'] ?></td><br><br>
                                <th  id="h1"><b>Lastname :</b></th>
                                <td id="h2"><?php echo $row['Lastname'] ?></td><br><br>
                                <th  id="h1"><b>VoterID number : </b></th>
                                <td><?php echo $row['VoterID_number'] ?></td><br><br>
                                <th id="h1"> <b> Aadhar number :</b></th>
                                <td><?php echo $row['Aadhar_number'] ?></td><br><br>
                                <th  id="h1"><b>DOB :</b></th>
                                 <td><?php echo $row['DOB'] ?></td><br><br>
                                <th  id="h1"> <b>Age : </b> </th>
                                <td><?php echo $row['Age']  ?></td><br><br>
                                <th  id="h1"><b>Gender :</b></th>
                                <td><?php echo $row['Gender'] ?></td><br><br>
                                <th  id="h1"><b>Phone number :</b></th>
                                <td><?php echo $row['Phone_number'] ?></td><br><br>
                                <th  id="h1"> <b>Email address :</b></th>
                                <td><?php echo $row['Email'] ?></td><br><br>
                                <th  id="h1"><b>D/NO. :</b></th>
                                <td><?php echo $row['Door_number'] ?></td><br><br>
                                <th  id="h1"><b>Street :</b></th>
                                <td><?php echo $row['Street'] ?></td><br><br>
                                <th  id="h1"><b>City :</b></th>
                                <td ><?php echo $row['City'] ?></td><br><br>
                                <th  id="h1"><b>Pincode :</b></th>
                                <td><?php echo $row['Pincode'] ?></td><br><br>
                                <th  id="h1"><b>Nationality :</b></th>
                                <td><?php echo $row['Nationality'] ?></td><br><br>
                               
                                
                               
                                </div>    
                        
                        <?php

                    }
               ?>

               
            <button class="btn">Edit</button>
        </form>
        </div>
        
</body>
</html>
   

    


