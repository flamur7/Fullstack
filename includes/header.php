<?php
    require 'dbconnect.php';
    $queryAA = $pdo -> query ('SELECT * FROM posts WHERE post_id = 31 ');
    $postAA = $queryAA->fetchAll();

    $queryBB = $pdo -> query ('SELECT * FROM posts WHERE post_id = 32 ');
    $postBB = $queryBB->fetchAll();

    $queryCC = $pdo -> query ('SELECT * FROM posts WHERE post_id = 33 ');
    $postCC = $queryCC->fetchAll();

    $queryDD = $pdo -> query ('SELECT * FROM posts WHERE post_id = 34 ');
    $postDD = $queryDD->fetchAll();

    $queryEE = $pdo -> query ('SELECT * FROM posts WHERE post_id = 35 ');
    $postEE = $queryEE->fetchAll();
?>



<!-- HEDERI -->
<div class="nav-bar">
    <?php foreach($postAA as $postaa ) : ?>
        <img src="admin/uploads/<?php echo $postaa['image'] ?>" style="width: 1600px; height: 750px; position: absolute">
    <?php endforeach; ?>
    
    <header>
    <?php foreach($postBB as $postbb ) : ?>
        <img src="admin/uploads/<?php echo $postbb['image'] ?>"
            style="height: 70px; width: 80px; padding-left: 330px; line-height: 0.731; position: relative; ">
        <?php endforeach; ?>
        <nav style="position: relative;">
            <ul>
                <li><a href="index.php">Home</b></a></li>
                <li><a href="#goaboutus">About Us</a></li>
                <li><a href="#gomenu">Menu</a></li>
                <li><a href="#gobooktable">Reservations</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="admin/signup.php">Sign Up</a></li>
                <li><a href="admin/login.php">Login</a></li>
            </ul>
        </nav>
        <hr>
        <?php foreach($postCC as $postcc ) : ?>
            <img src="admin/uploads/<?php echo $postcc['image'] ?>" style="position: absolute;left: 546px;top: 214px;width: 34px; height: 50px;">
            <h1><?php echo $postcc['title']; ?></h1>
            <p id="paragrafi"><?php echo $postcc['description']; ?></p>
            <p id="paragraf1"><?php echo $postcc['info']; ?> <br> <?php echo $postcc['info_plus']; ?>
            </p>
        <?php endforeach; ?>
        <!--CONTACT-->

        <div class="Contact1">
            <div id="Contact-post">
                <?php foreach($postDD as $postdd ) : ?>
                    <h4><?php echo $postdd['title']; ?></h4>
                    <p id="paragraf"><?php echo $postdd['description']; ?><br>et ultrices posuere cubilia.</p>
                    <p id="paragraf2"><?php echo $postdd['info']; ?></p>
                    <p id="paragraf3"><?php echo $postdd['info_plus']; ?></p>
                <?php endforeach; ?>

                <?php foreach($postEE as $postee ) : ?>
                    <p id="paragraf4"><?php echo $postee['title']; ?></p>
                    <p id="paragraf5"><?php echo $postee['description']; ?></p>
                    <p id="paragraf6"><?php echo $postee['info']; ?></p>
                    <p id="paragraf7"><?php echo $postee['info_plus']; ?></p>
                <?php endforeach; ?>
                
                <a href="#" id="map">view map</a>
                <a href="contact.php" id="tableRes">Table Reservation</a>
            </div>
        </div>
    </header>
</div>