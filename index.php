<?php
include './CSS/connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $Mobile=$_POST['Mobile'];
  $password=$_POST['password'];


$sql="insert into `crud` (name,email,Mobile,password)
values('$name','$email','$Mobile','$password')";
$result=mysqli_query($con,$sql);
if($result){
  //echo "data inserted successfully";
  header('location:disp.php');
}
else{
  die(mysqli_error($con));
}
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">

    <title>Project C R U D System!</title>
  </head>
  <body>
    <!-- START OF NAVBAAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PHP CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <!-- END OF NAVBAAR-->

      <!-- START OF BODY-->
      <div class="container my-5">
        <h2>Add a note</h2>
        <form method="post" action="index.php">
            <div class="mb-3">
              <label for="title" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter Your Name" autocomplete="off">
</div>

<div class="mb-3">
              <label for="title" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter Your Email" autocomplete="off">
</div>

<div class="mb-3">
              <label for="title" class="form-label">Mobile</label>
              <input type="text" class="form-control" name="Mobile" placeholder="Enter Your Mobile-Number" autocomplete="off">
</div>

<div class="mb-3">
              <label for="title" class="form-label">Password</label>
              <input type="text" class="form-control" name="password" placeholder="Enter Your Password" autocomplete="off">
</div>
              
            
            
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
          </form>
      </div>
       <!-- END OF BODY-->

       <!-- START OF MAIN-->

       
       <!-- END OF MAIN-->
    
    
  </body>
</html>