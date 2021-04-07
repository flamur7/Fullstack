<?php
    require 'dbconnect.php';
    $queryF = $pdo -> query ('SELECT * FROM posts WHERE post_id = 26 ');
    $postF = $queryF->fetchAll();
    
    $queryG = $pdo -> query ('SELECT * FROM posts WHERE post_id = 27 ');
    $postG = $queryG->fetchAll();

    $queryH = $pdo -> query ('SELECT * FROM posts WHERE post_id = 28 ');
    $postH = $queryH->fetchAll();

    $queryJ = $pdo -> query ('SELECT * FROM posts WHERE post_id = 29 ');
    $postJ = $queryJ->fetchAll();

    $queryK = $pdo -> query ('SELECT * FROM posts WHERE post_id = 30 ');
    $postK = $queryK->fetchAll();
?>






<!-- ABOUT US & SLIDERI -->
<div class="container" id="goaboutus">
    <div class = "container-position">
        <div class="slider">
            <div class="slide-container">
                <span  id="slider-image-1"></span>
                <span  id="slider-image-2"></span>
                <span  id="slider-image-3"></span>
                <span  id="slider-image-4"></span>
                <div class="image-container">

                <?php foreach($postF as $postf ) : ?>
                    <img src="admin/uploads/<?php echo $postf['image'] ?>" class="slider-image">
                <?php endforeach; ?>

                <?php foreach($postG as $postg ) : ?>
                    <img src="admin/uploads/<?php echo $postg['image'] ?>" class="slider-image">
                <?php endforeach; ?>

                <?php foreach($postH as $posth ) : ?>
                    <img src="admin/uploads/<?php echo $posth['image'] ?>" class="slider-image">
                <?php endforeach; ?>

                <?php foreach($postJ as $postj ) : ?>
                    <img src="admin/uploads/<?php echo $postj['image'] ?>" class="slider-image">
                <?php endforeach; ?>

                </div>
                    <div class="button-container">
                        <a href="#slider-image-1" class="slider-button"></a>
                        <a href="#slider-image-2" class="slider-button"></a>
                        <a href="#slider-image-3" class="slider-button"></a>
                        <a href="#slider-image-4" class="slider-button"></a>
                    </div>
            </div>
        </div>
                
                
            </div>
            <?php foreach($postK as $postk ) : ?>
                <h5>About us</h5>
                <p id="paragraf8"><?php echo $postk['title']; ?>
                    <br>
                    <?php echo $postk['description']; ?>
                    <br><br>
                    <?php echo $postk['info']; ?>
                    <br><br> 
                    <?php echo $postk['info_plus']; ?>
                </p>
            <?php endforeach; ?>
    </div>
</div>