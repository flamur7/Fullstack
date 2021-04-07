<?php 
    require 'dbconnect.php';

    $queryHop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 10 ');
    $topsHop = $queryHop->fetchAll();

    $queryJop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 11 ');
    $topsJop = $queryJop->fetchAll();

    $queryKop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 12 ');
    $topsKop = $queryKop->fetchAll();

    $queryLop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 13 ');
    $topsLop = $queryLop->fetchAll();

    $queryZop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 14 ');
    $topsZop = $queryZop->fetchAll();

    $queryXop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 15 ');
    $topsXop = $queryXop->fetchAll();

    $queryVop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 16 ');
    $topsVop = $queryVop->fetchAll();

    $queryNop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 17 ');
    $topsNop = $queryNop->fetchAll();

    $queryMop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 18 ');
    $topsMop = $queryMop->fetchAll();

    $queryQop = $pdo -> query ('SELECT * FROM posts WHERE post_id = 20 ');
    $topsQop = $queryQop->fetchAll();

?>

<!-- Menu -->
<div class="menu" id="gomenu">
    <div class="menu-position">
        <?php foreach($topsQop as $topsqop ) : ?>
            <h6><?php echo $topsqop['title']; ?></h6>
            <p id="paragraf10"><?php echo $topsqop['description']; ?></p>
            <!-- .......... PIZZA .......... -->
            <p id="pizzaa"><?php echo $topsqop['info']; ?></p>
        <?php endforeach; ?>

        <!-- CHICKEN & $14 -->
        <?php foreach($topsJop as $topsjop ) : ?>
            <p id="chicken"><?php echo $topsjop['title']; ?></p>
            <p id="chicken-m"><?php echo $topsjop['description']; ?></p>
            <p id="chicken2"><?php echo $topsjop['title']; ?></p>
            <p id="chicken-m2"><?php echo $topsjop['description']; ?></p>
        <?php endforeach; ?>

        <!-- HAWAIAN & $18 -->
        <?php foreach($topsKop as $topskop ) : ?>
            <p id="hawaian"><?php echo $topskop['title']; ?></p>
            <p id="hawaian-m"><?php echo $topskop['description']; ?></p>
            <p id="hawaian2"><?php echo $topskop['title']; ?></p>
            <p id="hawaian-m2"><?php echo $topskop['description']; ?></p>
        <?php endforeach; ?>

        <!-- MARGHERITA & $16 -->
        <?php foreach($topsLop as $topslop ) : ?>
            <p id="margherita"><?php echo $topslop['title']; ?></p>
            <p id="margherita-m"><?php echo $topslop['description']; ?></p>
            <p id="margherita2"><?php echo $topslop['title']; ?></p>
            <p id="margherita-m2"><?php echo $topslop['description']; ?></p>
        <?php endforeach; ?>

        <!-- MEXICANA & $19 -->
        <?php foreach($topsZop as $topszop ) : ?>
            <p id="mexicana"><?php echo $topszop['title']; ?></p>
            <p id="mexicana-m"><?php echo $topszop['description']; ?></p>
            <p id="mexicana2"><?php echo $topszop['title']; ?></p>
            <p id="mexicana-m2"><?php echo $topszop['description']; ?></p>
        <?php endforeach; ?>

        

        <!--DESSERT-->

        
        <?php foreach($topsXop as $topsxop ) : ?>

            <!-- paragrafi: .......... DESSERTS .......... -->
            <p id="desserts"><?php echo $topsxop['title']; ?></p>

            <!-- PANNA COTTAS & $14 -->
            <p id="pannacottas"><?php echo $topsxop['description']; ?></p>
            <p id="pannacottas-m"><?php echo $topsxop['info']; ?></p>
            <p id="pannacottas2"><?php echo $topsxop['description']; ?></p>
            <p id="pannacottas-m2"><?php echo $topsxop['info']; ?></p>
        <?php endforeach; ?>

        <!-- STICKY TOFFEE PUDDING & $13 -->
        <?php foreach($topsVop as $topsvop ) : ?>
            <p id="sticky"><?php echo $topsvop['title']; ?></p>
            <p id="sticky-m"><?php echo $topsvop['description']; ?></p>
            <p id="sticky2"><?php echo $topsvop['title']; ?></p>
            <p id="sticky-m2"><?php echo $topsvop['description']; ?></p>
        <?php endforeach; ?>

        <!-- BANOFFEE TIRAMISU & $11 -->
        <?php foreach($topsNop as $topsnop ) : ?>
            <p id="banoffee"><?php echo $topsnop['title']; ?></p>
            <p id="banoffee-m"><?php echo $topsnop['description']; ?></p>
            <p id="banoffee2"><?php echo $topsnop['title']; ?></p>
            <p id="banoffee-m2"><?php echo $topsnop['description']; ?></p>
        <?php endforeach; ?>

        <!-- CHOCOLATE HAZELNUT CHEESECAKE & $7 -->
        <?php foreach($topsMop as $topsmop ) : ?>
            <p id="chocolate"><?php echo $topsmop['title']; ?></p>
            <p id="chocolate-m"><?php echo $topsmop['description']; ?></p>
            <p id="chocolate2"><?php echo $topsmop['title']; ?></p>
            <p id="chocolate-m2"><?php echo $topsmop['description']; ?></p>
        <?php endforeach; ?>


                <!-- Paragrafi: Donec velit neque, auctor sit amet aliquam vel <br> ullamcorper sit amet ligula.............................. -->
        <?php foreach($topsHop as $topshop ) : ?>
            <p id="chicken-p"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="hawaian-p"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="margherita-p"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="mexicana-p"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="chicken-p2"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="hawaian-p2"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="margherita-p2"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="mexicana-p2"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="pannacottas-p"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="sticky-p"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="banoffee-p"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="chocolate-p"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="pannacottas-p2"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="sticky-p2"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="banoffee-p2"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="banoffee-p2"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
            <p id="chocolate-p2"><?php echo $topshop['title']; ?> <br> <?php echo $topshop['description']; ?></p>
        <?php endforeach ;?>


        <button class="btn">View All Menu</button>

    </div>
</div>