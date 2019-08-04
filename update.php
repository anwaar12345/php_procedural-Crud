<?php
include('db.php');

if(isset($_POST['done'])){

$id = $_GET['id'];
$user = $_POST['user'];
$title = $_POST['title'];
$message = $_POST['message'];
if(!isset($user) || $user == '' || !isset($title) || $title == '' || !isset($message) || $message == ''){
    
    $error = "please fill out all fields";
    header("location: update.php?error=".urlencode($error));
    exit();
}else{
$qu = "update shouts set id=$id, user='$user', title='$title', message='$message' WHERE id=$id ";
$query = mysqli_query($con,$qu);
header("location: index.php");
}
}
/*if(isset($_POST['done'])){

    $id = $_GET['id'];
   $user = $_POST['user'];
   $title = $_POST['title'];
   $message = $_POST['message'];
   $q = " update shouts set id=$id, user='$user', title='$title', message='$message' where id=$id  ";
  
    $query = mysqli_query($con,$q);
  
    header('location:index.php');
   }*/
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./style.css">
</head>
<body>

  <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>
<div>
<?php if(isset($_GET['error'])):?>
     <div  class="text text-danger" id="e"><?php echo $_GET['error'];?></div>
    <?php endif; ?>
</div>
  <label> User: </label>
 <input type="text" name="user" class="form-control"> <br>
 <label> Subject: </label>
 <input type="text" name="title" class="form-control"> <br>

  <label> Message: </label>
 <input type="text" name="message" class="form-control"> <br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
</body>
</html>