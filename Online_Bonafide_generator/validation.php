<?php
session_start();

include("connect.php");

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from account where user='$name' && password='$pass'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
    header('location:user_home.html');
    exit;
}
else{
    echo '<script type="text/javascript">';
    echo 'alert("login failed !");';
    echo 'window.location.href="login.html";';
    echo '</script>';
    exit;

}


?>