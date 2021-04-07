<?php
    require '../includes/dbconnect.php';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $permission =$_POST['permission'];
        $message = '';
    
        $sql = 'INSERT INTO users(username,name,surname,email,password,permission) VALUES (:username, :name, :surname, :email, :password, :permission)';
        $query = $pdo->prepare($sql);
        if (empty($username)) {
            $message = "Username is required!";
        } else {
            $query->bindParam('username', $username);
        }
        if (empty($name)) {
            $message = "Name is required!";
        } else {
            $query->bindParam('name', $name);
        }
        if (empty($surname)) {
            $message = "Surname is required!";
        } else {
            $query->bindParam('surname', $surname);
        }
        if (empty($email)) {
            $message = "Email is required!";
        } else {
            $query->bindParam('email', $email);
        }
        if (empty($password)) {
            $message = "Password is required!";
        } else {
            $query->bindParam('password', $password);
        }
        $query->bindParam('permission', $permission);
    
        if($query->execute()){
            $message = "Successfully created your account!";
        } else {
            $message = "A problem occured creating your account!";
        }

        header("Location: index.php?page=users");
    }

?>

<!DOCTYPE html>
<head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="../css/bacground2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" href="img/icona.png">
</head>

<body>



<div class="container" >
<?php
        if (!empty($message)) : ?>
            <div class="alert alert-primary">
                <?php echo $message ?>
            </div>
        <?php endif; ?>
    
            <div class="header">
            <h2>Add User</h2>
            </div>
            
        <form method="post" id="form">
            <div class="control" style="width: 500px; color: white; font-size: 20px; margin-right: 100px ">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="username" class="form-control" id="username" required /> 
            </div>

            <div class="control" style="width: 500px; color: white; font-size: 20px;">
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="name" id="name" class="form-control" required>
            </div>

            <div class="control" style="width: 500px; color: white; font-size: 20px;">
                <label for="surname">Surname:</label>
                <input type="text" name="surname" placeholder="surname"id="surname" class="form-control" required>
            </div>

            <div class="control" style="width: 500px; color: white; font-size: 20px;">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="email"id="email" class="form-control" required>
            </div>

            <div class="control" style="width: 500px; color: white; font-size: 20px;">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="password"id="password" class="form-control" required minlength=6>
            </div>

            <div class="control" style="width: 500px; color: white; font-size: 20px;">
                <label for="permission">Permission:</label>
                <input type="number" name="permission" placeholder="permission"id="permission" class="form-control" required >
            </div>

            <input type="submit" value="Add User" name="submit" class="btn btn-warning" id="movebutton">
        </form>
</div>

</body>
</html>

<?php 

    include 'includes/footer.php';
?>