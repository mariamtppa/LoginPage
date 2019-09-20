<?php

session_start();


$con = mysqli_connect('localhost', 'id10945324_root', 'codeheist');

mysqli_select_db($con, 'id10945324_userregister');

$username = $_POST['username'];
$password = $_POST['password'];

$s = " select * from userprofile where username = '$username' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $username;
    header('location:home.php');
}else{
    echo 'Wrong login details <a href="index.html">Go back to login page</a>';
}

?>