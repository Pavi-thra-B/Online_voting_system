<?php
session_start();
include("db.php");
if(isset($_GET['id']))
{
$id=$_GET['id'];
}
$query1="delete from candidate_register where Serial_num='$id'";
$query2="delete from party_register where Serial_num='$id'";

$result1=mysqli_query($conn,$query1);
$result2=mysqli_query($conn,$query2);

if($result1 && $result2)
{
  header("Location:managecandidate.php");
}
?>

