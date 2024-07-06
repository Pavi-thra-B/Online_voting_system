<?php
session_start();
include("db.php");

if(isset($_GET['vid']))
{
    $vid=$_GET['vid'];
    
    
}
if(isset($_GET['id']))
{
    $id=$_GET['id'];
}

//echo "$vid";
$query1="select Status from voter_register where VoterID_number ='$vid' ";
//echo "<script>console.log('hii')</script>";
$result1=mysqli_query($conn,$query1);
if(mysqli_num_rows($result1) === 1)
{
$row1 = mysqli_fetch_assoc($result1);
$Status= $row1['Status'];
}
else
{
    echo '<script>';
    echo 'alert("Voter ID number is invalid");';
    echo 'window.location.href = "home1.html";';
    echo '</script>';
  
}

$query2="select Vote_count from party_register where Serial_num='$id'";
$result2=mysqli_query($conn,$query2);
$row2= mysqli_fetch_assoc($result2);
$vote_count=$row2['Vote_count'];

if($Status==0)
{
$query3="update voter_register set Status=1  where VoterID_number ='$vid'";
$result=mysqli_query($conn,$query3);
$vote_count=$vote_count+1;

$query4="update party_register set Vote_count=$vote_count  where Serial_num='$id'";
$result=mysqli_query($conn,$query4);
header("Location: conf_mail.php");
}
else
{
    echo '<script>';
    echo 'alert("You have already voted! No second vote is allowed");';
    echo 'window.location.href = "home1.html";';
    echo '</script>';
  
}


?>



