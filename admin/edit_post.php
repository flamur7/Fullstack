<?php

    require '../includes/dbconnect.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $sql = 'SELECT * FROM posts WHERE post_id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $post = $query->fetch();

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $info = $_POST['info'];
        $info_plus = $_POST['info_plus'];

        
        $image_file = time() . $_FILES['image']['name'];
        $temp = $_FILES['image']['tmp_name'];

        move_uploaded_file($temp, "uploads/".$image_file);

        $sql = "UPDATE posts SET title = :title, description = :description, info = :info, info_plus = :info_plus, image= :image WHERE post_id = :id";
        $query = $pdo->prepare($sql);

        $query->bindParam('title',$title);
        $query->bindParam('description',$description);
        $query->bindParam('info',$info);
        $query->bindParam('info_plus',$info_plus);
        $query->bindParam('image',$image_file);
        $query->bindParam('id',$id);

        $query->execute();

        header("Location: index.php?page=posts");
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
<div class="container">

            <div class="header">
                Add post
            </div>
            <form method="post" class="p-1" enctype="multipart/form-data">
                <div class="control" style="width: 500px; color: white; font-size: 20px; margin-right: 100px ">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $post['title'] ?>" required maxlength="30">
                </div>

                <div class="control" style="width: 500px; color: white; font-size: 20px; margin-right: 100px ">
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description" class="form-control" value="<?php echo $post['description'] ?>" >
                </div>

                <div class="control" style="width: 500px; color: white; font-size: 20px; margin-right: 100px ">
                    <label for="info">Info:</label>
                    <input type="text" name="info" id="info" class="form-control" value="<?php echo $post['info'] ?>" >
                </div>

                <div class="control" style="width: 500px; color: white; font-size: 20px; margin-right: 100px ">
                    <label for="info_plus">Info Plus:</label>
                    <input type="text" name="info_plus" id="info_plus" class="form-control" value="<?php echo $post['info_plus'] ?>" >
                </div>

                <div class="control" style="width: 500px; color: white; font-size: 20px; margin-right: 100px ">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control" accept=".jpg, .jpeg, .png">
                    <br>
                    <img src="uploads/<?php echo $post['image'] ?>"  height="200" width="300">
                </div>
                <input type="submit" name="submit" value="Edit Post" class="btn btn-primary mt-1">
            </form>
</div>
</body>
</html>

<?php 

    include 'includes/footer.php';
?>