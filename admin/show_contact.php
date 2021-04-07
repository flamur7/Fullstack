<?php 

    include '../includes/dbconnect.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $sql = "SELECT * FROM contacts WHERE contact_id = :id";
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $contact = $query->fetch();

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
            <div class="card">
                <div class="card-body bg-dark">
                    <h1 class="card-title  text-light font-weight-bold"><?php echo $contact['full_name'] ?></h1>
                    <h4 class="card-subtitle mb-2 text-light"><?php echo $contact['username'] ?></h2>
                    <h5 class="card-subtitle mb-2 text-muted"><?php echo $contact['email'] ?></h2>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $contact['password'] ?></h2>
                    <p class="card-text  mb-2 text-light"><?php echo $contact['message'] ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php 

    include 'includes/footer.php';
?>