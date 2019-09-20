<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:index.html');
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <a href='logout.php'> LOGOUT </a>
    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
</body>
</html>