<?php
session_start();
include("db.php");

if(isset($_POST['user']) && isset($_POST['pass']))
{
function validate($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
$user=validate($_POST['user']);
$pass=validate($_POST['pass']);

if(empty($user))
{
    header("Location: candidatelogin.php?error=Username is required");
    exit();
}
else if(empty($pass))
{
    header("Location: candidatelogin.php?error=Password is required");
    exit();
}
else{
$sql="select * from candidate_login where username='$user' and password='$pass'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) === 1)
{
   $row=mysqli_fetch_assoc($result);
   if($row['username']=== $user && $row['password']=== $pass)
   {
   
    header("Location: candidatehomepage.php?username=" . urlencode($user));
    exit();
   }

}
else
{
    header("Location: candidatelogin.php?error=Username or Password is invalid");
    exit();
}
}

}
else
{
    
   header("Location: candidatelogin.php");
   exit();
}


?>
