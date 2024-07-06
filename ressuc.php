<?php
session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD']=='POST')
$dt=$_POST['dt'];
$query="update admin_login set set_time='$dt' where username ='admin' and password='admin'";
$result=mysqli_query($conn,$query);

header("location: adminhome.php");
?>
