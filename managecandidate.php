<?php
session_start();
include("db.php");
$query1="select * from candidate_register";
$result1=mysqli_query($conn,$query1);
$query2="select * from party_register";
$result2=mysqli_query($conn,$query2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Candidate</title>
    <link rel="stylesheet" href="voterinfo.css">
    <style>
body
{
  background-image: url("background3.jpeg");
}
table,tr,td
{
    border:2px solid black;
    border-collapse:collapse;
   

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

.topic:hover{
    background-color:blue;
    color:white;
}
.topic
{
    color:white;
    background-color: blue;
}
.head
{
    color:black;
    width:300px;
    height:20px;
    background-color:azure;
    border:2px solid ;
    padding:5px;
    border-radius:10px;
}

.head1
{
    color:white;
    width:200px;
    height:20px;
    background-color:black;
    border:1px solid ;
    padding:2px;
    border-radius:5px;
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

    </style>
    <title>My profile</title>
</head>
<body class="bg-dark">

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
    <div class="container">
        <div class="row" mt-5>
            <div class="col">
                <div class="card mt-5">
                    <div class=card-header>
                       <center><h3 class="head">CANDIDATE INFORMATION</h3></center> 
                       
                       <center><h4 class="head1">Personal information</h4></center> 
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="topic">
                            <td>S.NO.</td>
                                <td>Firstname</td>
                                <td>Lastname</td>
                                <td>CandidateID number</td>
                                <td>Aadhar number</td>
                                <td>DOB</td>
                                <td>Age</td>
                                <td>Gender</td>
                                <td>Phone number</td>
                                <td> Email address</td>
                                <td>Door number</td>
                                <td>Street</td>
                                <td>City</td>
                                <td>Pincode</td>
                                <td>Nationlity</td>
                                <td>Photo</td>
                                <td>Action</td>
                                
                                
                            </tr>
                            <tr >
                                <?php
                                while($row=mysqli_fetch_assoc($result1))
                                {
                                ?>
                                 <td><?php echo $row['Serial_num'] ?></td>
                                <td><?php echo $row['Firstname'] ?></td>
                                <td><?php echo $row['Lastname'] ?></td>
                                <td><?php echo $row['Candidateid_number'] ?></td>
                                <td><?php echo $row['Aadhar_number'] ?></td>
                                <td><?php echo $row['DOB'] ?></td>
                                <td><?php echo $row['Age'] ?></td>
                                <td><?php echo $row['Gender'] ?></td>
                                <td><?php echo $row['Phone_number'] ?></td>
                                <td><?php echo $row['Email'] ?></td>
                                <td><?php echo $row['Door_number'] ?></td>
                                <td><?php echo $row['Street'] ?></td>
                                <td><?php echo $row['City'] ?></td>
                                <td><?php echo $row['Pincode'] ?></td>
                                <td><?php echo $row['Nationality'] ?></td>
                                <td>
                                   <img src="data:image/jpeg;base64,
                                   <?php echo base64_encode($row['Photo']);?>"
                                   alt="img" width="100" height="100">

                                </td>
                                <td><button class="btn"><a href="canddelete.php?id=<?php echo $row['Serial_num']; ?>">Delete</a></button></td>
                              
                            </tr>
                                 <?php   
                                }
                                ?>
                            
                        </table>
                      <br><br>
                      <center><h4 class="head1">Party information</h4></center>
                        <table class="table table-bordered text-center">
                            <tr class="topic">
                            <td>S.NO.</td>
                            
                                <td>Partyname</td>
                                <td>PartySymbol</td>
                                <td>Signature</td>
                                <td>Principles</td>
                                <td>Vote_count</td>
                                <td>Delete</td>
                                
                                
                            </tr>
                            <tr >
                                <?php
                                while($row1=mysqli_fetch_assoc($result2))
                                {
                                ?>
                                <td><?php echo $row1['Serial_num'] ?></td>
                               
                               <td><?php echo $row1['Partyname'] ?></td>
                               <td>
                                   <img src="data:image/jpeg;base64,
                                   <?php echo base64_encode($row1['Symbol']);?>"
                                   alt="img" width="100" height="100">

                                </td>
                                <td>
                                   <img src="data:image/jpeg;base64,
                                   <?php echo base64_encode($row1['Signature']);?>"
                                   alt="img" width="100" height="100">

                                </td>
                                <td><?php echo $row1['Principles'] ?></td>
                                <td><?php echo $row1['Vote_count'] ?></td>
                                <td><button class="btn"><a href="canddelete.php?id=<?php echo $row1['Serial_num']; ?>">Delete</a></button></td>
                               
                              
                            </tr>
                                 <?php   
                                }
                                ?>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
