
<?php
    require 'dbconnect.php';
    $queryTop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 1 ');
    $tops = $queryTop->fetchAll();

    $queryBop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 2 ');
    $topsBop = $queryBop->fetchAll();

    $queryCop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 5 ');
    $topsCop = $queryCop->fetchAll();



?>

<!-- FOOTER -->
<footer>
    <div class="footer-bar">
        <?php foreach($tops as $top ) : ?>
            <p id="paragraf15"><?php echo $top['title']; ?></p>
            <p id="paragraf16"><?php echo $top['description']; ?></p>
            <p id="paragraf17"><?php echo $top['info']; ?></p>
        <?php endforeach ;?>
        
        

        <?php foreach($topsBop as $topbop ) : ?>
            <p id="paragraf19"><?php echo $topbop['title']; ?></p>
            <p id="paragraf20"><?php echo $topbop['description']; ?></p>
            <p id="paragraf21"><?php echo $topbop['info']; ?></p>
        <?php endforeach ;?>
        

        <button class="btn2">Table Reservation</button>
        <button class="btn3">View map</button>
        
        <?php foreach($topsCop as $topscop ) : ?>
            <p id="paragraf22"><?php echo $topscop['title']; ?></p>
            <p id="paragraf23"><?php echo $topscop['description']; ?> <br> <?php echo $topscop['info']; ?></p>

            <p id="paragraf18"> <?php echo $topscop['info_plus']; ?></p>
        <?php endforeach ;?>

        <div class="ok">
            <a href="https://www.facebook.com/"><img src="img/facebookIcon.png" id="fb" alt="facebook"></a>
            <a href="https://www.twitter.com/"><img src="img/twiiter.png" id="tw" alt="twiiter"></a>
            <a href="https://www.gmail.com/"><img src="img/gmail.png" id="gm" alt="gmail"></a>
            <a href="https://www.youtube.com/"><img src="img/youtube.png" id="yt" alt="youtube"></a>
        </div>
    </div>
</footer>