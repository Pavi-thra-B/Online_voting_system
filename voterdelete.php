
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage voter</title>
    
    <!-- Include SweetAlert from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php

session_start();
include("db.php");



if(isset($_GET['id']))
{
$id=$_GET['id'];
}
$query="delete from voter_register where Serial_num='$id'";

$result=mysqli_query($conn,$query);

if($result)
{
    echo '<script>';
    echo 'Swal.fire({
               title: "SweetAlert Example",
               text: "This is a SweetAlert message!",
               icon: "success",
               confirmButtonText: "OK"
           });';
    echo '</script>';
//header("Location:managevoter.php");
}
?>

