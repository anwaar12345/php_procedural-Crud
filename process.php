<?php
include('db.php');
if(isset($_POST['submit'])){
$user = $_POST['user'];
$title = $_POST['title'];
$message = $_POST['message'];
  
if(!isset($user) || $user == '' || !isset($title) || $title == '' || !isset($message) || $message == '')
{
    $error = "please fill out all fields";
    header("location: index.php?error=".urlencode($error));
    exit();
}else{
    $qi = "INSERT INTO shouts (user, title,message) VALUES ('$user','$title','$message')";
    
    if(!mysqli_query($con,$qi)){
        die("error".mysqli_error($con));
    }else{
        header("location: index.php");
        exit();
    }
}
}


  // deleting code
  $id = $_GET['id'];
  $qd = "DELETE  FROM shouts WHERE id= $id ";
  mysqli_query($con,$qd);
  header("location: index.php");

  
?>