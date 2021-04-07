<?php 
    $query = $pdo->query('SELECT * FROM posts');
    $posts = $query->fetchAll();
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
        <h1 style="color: white; text-align:center;">Posts</h1>
        <a href="index.php?page=add_post" class="btn btn-sm btn-primary">Add Post</a>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Info</th>
                    <th scope="col">Info Plus</th>
                    <th scope="col">Image</th>
                    <th scope="col">Date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post) : ?>
                    <tr>
                        <td><?php echo $post['post_id']; ?></td>
                        <td><?php echo $post['title']; ?></td>
                        <td><?php echo $post['description']; ?></td>
                        <td><?php echo $post['info']; ?></td>
                        <td><?php echo $post['info_plus']; ?></td>
                        <td><?php echo $post['image']; ?></td>
                        <td><?php echo $post['date_add']; ?></td>
                        <td><a href="index.php?page=edit_post&id=<?php echo $post['post_id']; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="index.php?page=delete_post&id=<?php echo $post['post_id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
<html>
<?php 

    include 'includes/footer.php';
?>