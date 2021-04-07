<?php
session_start();

require '../includes/dbconnect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $message = '';

    $sql = 'INSERT INTO users(username,name,surname,email,password) VALUES (:username, :name, :surname, :email, :password)';
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

    if($query->execute()){
        $message = "Successfully created your account!";
    } else {
        $message = "A problem occured creating your account!";
    }
}

?>

<!DOCTYPE html>
<head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" href="img/icona.png">
    <script src="js/register.js"></script>
</head>

<body>
    <div class="container">
    <?php
        if (!empty($message)) : ?>
            <div class="alert alert-primary">
                <?php echo $message ?>
            </div>
        <?php endif; ?>
        <div class="header">
            <h2>Register Form</h2>
        </div>
        <form action="signup.php" method="post" id="form" class="form">
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Write your first name" id="firstname" required minlength="4"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="name"> Name</label>
                <input type="text" name="name" placeholder="Write your last name" id="lastname" required minlength="4" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="surname">Surname</label>
                <input type="text" name="surname" placeholder="Write your username" id="username" required minlength="4"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Write your email" id="email" required/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Write your password" id="password" required minlength="6"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <button type="submit"  name="submit" value="Register">Register</button>
            <p>Are you a member? <a href="login.php">Login</a></p>
            <!-- <script src="js/register.js"></script> -->

        </form>
    </div>
</body>
</html>