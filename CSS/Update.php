<?php
include 'CRUD/CSS/connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $Mobile=$_POST['Mobile'];
  $password=$_POST['password'];


$sql="update `curd` set id=$id,name=$name,email='$email',Mobile='$Mobile',password='$password'
where id=$id";
$result=mysqli_query($con,$sql);
if($result){
  echo "updated successfully";
  //header('location:disp.php');
}
else{
  die(mysqli_error($con));
}
}
?>