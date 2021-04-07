<?php 

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=web2021","root","");
    }
    catch(PDOException $pdo){
        die("Unsuccessful connection");
    }
    
?>