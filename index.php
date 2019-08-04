<?php
include('db.php');

$query =  mysqli_query($con,"select* from shouts");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Home Crud</title>
</head>
<body>
     
     <div class="container" >
     <div style="margin-top:50px;">
     <ul class="list-group">
     <?php while($row = mysqli_fetch_assoc($query)):?>
     <li class="list-group-item active"><strong>User:</strong> <?php echo $row['user'];?> <span> :</span> <strong>Subject </strong> <span>:</span> <?php echo $row['title'];?> : <strong>Message</strong><span> : </span><?php echo $row['message'];?>&nbsp; &nbsp; &nbsp; &nbsp;<button class="btn"><a href="process.php?id=<?php echo $row['id']; ?>">Delete</a></button>&nbsp;&nbsp;&nbsp;<button class="btn btn-default"><a href="update.php?id=<?php echo $row['id']; ?>">update</a></li>
    <?php endwhile; ?>
     </ul>
     </div> 
     <div  class="card form-control">
     
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  CRUD Procedural PHP </h1>
 </div>
     <?php if(isset($_GET['error'])):?>
     <div class="text-danger" id="e"><?php echo $_GET['error'];?></div>
    <?php endif; ?>
    <br>
     <form method="post" action="./process.php">
     <input type="text" name="user" placeholder="Enter your name here!!!" class="form-control">
     <br>
     <br>
     <input type="text" name="title" placeholder="Enter Title" class="form-control">
     <br>
     <br>
     <input type="text" name="message" placeholder="Enter your message!!!" class="form-control">
     <br>
     <br>
     <input type="submit" name="submit" value="submit" class="btn btn-success">
     </form>
     </div>
     </div>

</body>
</html>