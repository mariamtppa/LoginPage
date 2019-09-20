<?php
$hostname = 'localhost';
$username = 'id10945324_root';
$password = 'codeheist';
$database = 'id10945324_userregister';

try{
        $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully";
}
catch(PDOException $e){
    echo "Connection error: ".$e->getMessage();
}

?>