<?php
    require 'dbconnect.php';
    $queryDop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 6 ');
    $topsDop = $queryDop->fetchAll();

    $queryEop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 7 ');
    $topsEop = $queryEop->fetchAll();

    $queryFop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 8 ');
    $topsFop = $queryFop->fetchAll();

    $queryGop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 9 ');
    $topsGop = $queryGop->fetchAll();

?>





    <!--BOOK A TABLE-->

    <div class="booktable" id="gobooktable">
        <div class ="booktable-position">

        <?php foreach($topsDop as $topsdop ) : ?>
            <img src="admin/uploads/<?php echo $topsdop['image'] ?>" style="width: 1600px; height: 490px; position: absolute;">
            <h3><?php echo $topsdop['title']; ?></h3>
            <p id="paragraf11"><?php echo $topsdop['description']; ?></p>
            <p id="paragraf12"><?php echo $topsdop['info']; ?></p>
        <?php endforeach ;?>


        <?php foreach($topsEop as $topseop ) : ?>
            <p id="paragraf13"><?php echo $topseop['title']; ?></p>
            <p id="paragraf14"><?php echo $topseop['description']; ?></p>
        <?php endforeach ;?>

            <input type="date" id="day" name="data">

            <select name="time" id="time">
            <?php foreach($topsFop as $topsfop ) : ?>
                <option value="8:00pm"><?php echo $topsfop['title']; ?></option>
                <option value="9:00pm"><?php echo $topsfop['description']; ?></option>
                <option value="10:00pm"><?php echo $topsfop['info']; ?></option>
                <option value="11:00pm"><?php echo $topsfop['info_plus']; ?></option>
            <?php endforeach ;?>
            </select>

            <select name="people" id="nrpeople">
                <?php foreach($topsGop as $topsgop ) : ?>
                    <option value="2"><?php echo $topsgop['title']; ?></option>
                    <option value="3"><?php echo $topsgop['description']; ?></option>
                    <option value="4"><?php echo $topsgop['info']; ?></option>
                    <option value="5"><?php echo $topsgop['info_plus']; ?></option>
                <?php endforeach ;?>
            </select>

            <a href="contact.php">
                <button class="btn1">Book now</button>
            </a>
        </div>
    </div>
