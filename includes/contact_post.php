<?php 

    require "../includes/dbconnect.php";

    if(isset($_POST['submit'])){
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contacts (full_name,username,email,password,message) VALUE (:full_name, :username, :email, :password, :message)";
        $query = $pdo->prepare($sql);

        $query->bindParam('full_name',$full_name);
        $query->bindParam('username',$username);
        $query->bindParam('email',$email);
        $query->bindParam('password',$password);
        $query->bindParam('message',$message);

        $query->execute();

        header("Location: ../");
    }

?>