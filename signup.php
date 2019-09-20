<?php

session_start();

$con = mysqli_connect('localhost','id10945324_root', 'codeheist');

mysqli_select_db($con, 'id10945324_userregister');

$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$s = " select * from userprofile where username = '$username' OR email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $message = 'Username or email has already been taken <a href="index.html">Login instead?</a>';
    echo $message;
}else{
    $reg = "insert into userprofile(Username, Password, Firstname, Lastname, Email) values ('$username', '$password', '$firstname', '$lastname', '$email')";
    mysqli_query($con, $reg);
    $_SESSION["username"] = $username;
    header('location:home.php');
}

?>