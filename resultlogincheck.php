<?php
session_start();
include("db.php");

if(isset($_POST['user']) && isset($_POST['aadhar']) && isset( $_POST['nation']) )
{
function validate($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
$user=validate($_POST['user']);
$aadhar=validate($_POST['aadhar']);
$nation=validate($_POST['nation']);

if(empty($user))
{
    header("Location: result_login.php?error=Name is required");
    exit();
}
else if(empty($aadhar))
{
    header("Location: result_login.php?error=Aadhar number is required");
    exit();
}
else if(empty($nation))
{
    header("Location: result_login.php?error=Nationality is required");
    exit();
}
else{
$sql="select * from result_login where Name='$user' and Aadhar_number='$aadhar' and Nationality='$nation'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) === 1)
{
   $row=mysqli_fetch_assoc($result);
   if($row['Nationality']==="Indian" || "indian" || "INDIAN")
   {
   
   header("Location: time.php ");
   }

}
else
{
    header("Location: result_login.php?error=Aadhar no or Nationality is invalid");
    exit();
}
}

}
else
{
    
   header("Location: result_login.php");
   exit();
}


?>
