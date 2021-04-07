<?php 
    $query = $pdo->query('SELECT * FROM contacts');
    $contacts = $query->fetchAll();
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
<div class="mt-2">
    <div class="container">
        <h1 style="color: white; text-align:center;">Contacts</h1>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Message</th>
                    <th scope="col">Date</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact) : ?>
                    <tr>
                        <td><a href="index.php?page=show_contact&id=<?php echo $contact['contact_id']; ?>"><?php echo $contact['contact_id']; ?></a></td>
                        <td><?php echo $contact['full_name']; ?></td>
                        <td><?php echo $contact['username']; ?></td>
                        <td><?php echo $contact['email']; ?></td>
                        <td><?php echo $contact['password']; ?></td>
                        <td><?php echo $contact['message']; ?></td>
                        <td><?php echo $contact['date_add']; ?></td>
                        <td><a href="index.php?page=delete_contact&id=<?php echo $contact['contact_id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

<?php 

    include 'includes/footer.php';
?>
