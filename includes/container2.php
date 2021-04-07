<?php
    require 'dbconnect.php';
    $queryA = $pdo -> query ('SELECT * FROM posts WHERE post_id = 21 ');
    $postA = $queryA->fetchAll();

    $queryB = $pdo -> query ('SELECT * FROM posts WHERE post_id = 22 ');
    $postB = $queryB->fetchAll();

    $queryC = $pdo -> query ('SELECT * FROM posts WHERE post_id = 23 ');
    $postC = $queryC->fetchAll();

    $queryD = $pdo -> query ('SELECT * FROM posts WHERE post_id = 24 ');
    $postD = $queryD->fetchAll();

    $queryE = $pdo -> query ('SELECT * FROM posts WHERE post_id = 25 ');
    $postE = $queryE->fetchAll();
?>

 




<!--Our SPECIALITIES CODE-->

<div class="container2">
    <div class="container2-position">
            <!-- H & P and Background -->
        <?php foreach($postA as $posta ) : ?>
            <img src="admin/uploads/<?php echo $posta['image'] ?>" style="position: absolute; height: 600px; width: 1600px;">
            <h2><?php echo $posta['title']; ?></h2>
            <p id="paragraf9"><?php echo $posta['description']; ?></p>
        <?php endforeach; ?>


            <div class="pizza">
                <?php foreach($postB as $postb ) : ?>
                    <img src="admin/uploads/<?php echo $postb['image'] ?>" style="height: 190px;width: 220px;position: absolute" ;>
                    <p class="pizza-a"><?php echo $postb['title']; ?></p>
                <?php endforeach; ?>
            </div>

            <div class="hamburger">
                <?php foreach($postC as $postc ) : ?>
                    <img src="admin/uploads/<?php echo $postc['image'] ?>" style="height: 190px;width: 220px;position: absolute" ;>
                    <p id="pizza-b"><?php echo $postc['title']; ?></p>
                <?php endforeach; ?>
            </div>

            <div class="lazanja">
                <?php foreach($postD as $postd ) : ?>
                    <img src="admin/uploads/<?php echo $postd['image'] ?>" style="height: 190px;width: 220px;position: absolute" ;>
                    <p id="pizza-c"><?php echo $postd['title']; ?></p>
                <?php endforeach; ?>
            </div>

            <div class="doner">
                <?php foreach($postE as $poste ) : ?>
                    <img src="admin/uploads/<?php echo $poste['image'] ?>" style="height: 190px;width: 220px;position: absolute" ;>
                    <p id="pizza-d"><?php echo $poste['title']; ?></p>
                <?php endforeach; ?>
            </div>
    </div>
</div>