<?php
session_start();

include("connect.php");

$name=$_POST['user'];
$pass=$_POST['password'];

$email=$_POST['email'];
$rollno=$_POST['rollno'];
$phone=$_POST['phone'];

$s="select * from account where user='$name'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==1)
{

    echo '<script type="text/javascript">';
    echo 'alert("username already exists");';
    echo 'window.location.href="signup.html";';
    echo '</script>';

    

}
else{
    $query=mysqli_query($conn, "INSERT into account values('$name','$pass','$email','$rollno','$phone')");

    echo '<script type="text/javascript">';
    echo 'alert("Registered successfully");';
    echo 'window.location.href="login.html";';
    echo '</script>';
}
?>
