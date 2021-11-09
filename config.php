<?php
ob_start(); //saves output of data till the end

try {
    $con = new PDO("mysql:dbname=foxtrot;host=localhost","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} 
catch(PDOException $e){
    echo "Connection failed: ". $e->getMessage();
}

?>