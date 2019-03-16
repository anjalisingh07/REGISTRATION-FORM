<?php 
session_start();

$db = mysqli_connect('localhost','root','','registration');
$name="";
$email="";
$password="";
$dob="";
$gender="";
if(isset($_POST['submit'])){
  if (empty($_POST['name'])) {
    $nameErr = "Missing";
}
else {
    $name = $_POST['name'];
}
  $email = $_POST['email'];
  $password =$_POST['password'];
  $dob = $_POST['dob'];
  $gender =$_POST['gender'];
mysqli_query($db,"INSERT INTO users(name,email,password,dob,gender)  
VALUES('$name', '$email','$password', '$dob', '$gender')  
");
  header('location: welcome.php');  
}
  ?>