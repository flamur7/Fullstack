<?php 
    require '../includes/dbconnect.php';
    $query = $pdo->query('SELECT * FROM users');
    $users = $query->fetchAll();

    if($_SESSION['permission']==1){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bacground2.css">
</head>
<body>
<div class="container">
    <h1 style="color: white; text-align:center;">Users</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col ">Username</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Email</th>
                <th scope="col">Permissions</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['surname']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['permission']; ?></td>
                    <td><a href="index.php?page=edit_user&id=<?php echo $user['user_id']; ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="index.php?page=delete_user&id=<?php echo $user['user_id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php?page=add_users&id=<?php echo $user['user_id'];?>" class="btn btn-primary">Add User</a>
</div>

<?php
    } else {
        header ('Location: ../contact.php'); 
    }
?>
</body>
</html>

<?php 

    include 'includes/footer.php';
?>