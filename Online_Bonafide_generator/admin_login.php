<?php
    $name=$_POST['admin_name'];
    $pass=$_POST['password'];

    if($name=="gpnashik" && $pass=="gpnashik@123")
    {
    echo '<script type="text/javascript">';
    echo 'window.location.href="admin_home.html";';
    echo '</script>';
    }
    else{
    echo '<script type="text/javascript">';
    echo 'alert("invalid admin name or password");';
    echo 'window.location.href="admin_login.html";';
    echo '</script>';
    }
    
?>