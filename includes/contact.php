 


<?php 
    require 'includes/dbconnect.php';
?>
<!DOCTYPE html>
<head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" href="img/icona.png">
</head>

<body>
    
    <div class="container">
        <div class="header">
            <h2>Contact Form</h2>
        </div>
        <form action="includes/contact_post.php" method="post" id="form" class="form">
            <div class="form-control">
                <label for="username">Fullname</label>
                <input type="text" placeholder="Write your email" id="fullname" name="full_name" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" placeholder="Write your username" id="username" name="username" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Email</label>
                <input type="email" placeholder="Write your email" id="email" name="email"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Password</label>
                <input type="password" placeholder="Write your password" id="password" name="password"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="message">My Order!</label>
                <textarea name="message" rows="5" cols="41" placeholder="Say your order!" id="order" name="message"></textarea>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            
            <button type="submit" name="submit">Send</button>
            <button type="reset">Reset</button>
            <script src="js/script.js"></script>
            

        </form>
    </div>
</body>
</html>
