<?php

require 'includes/functions.php';

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$photo = findOneById($id);
if ($photo== false){
    exit ('No Image');
}
$src='images/large/'.$photo['slug'].'.jpg';
?>

<!doctype html>
<html lang="fr">
<?php require 'includes/head.php'?>
<body id="detail">
    <?php require 'includes/header.php'?>
    <main>
        <div id="hero">
            <!-- Picture title -->
            <h1><?php echo $photo['title'];?></h1>
        </div>
        <div class="container">
            <figure>
                <!-- Picture file (large) -->
                <img src="<?php echo $src ;?>" alt="Image large file"/>
                <!-- Picture date and location -->
                <figcaption><?php echo $photo['date'] ;?> - Location, <?php echo $photo['location'] ;?></figcaption>
            </figure>
            <!-- Picture description  -->
            <p><?php echo $photo['description'] ;?></p>
            <p id="pager">
                <?php
                if ($id==1){
                    $disabled= 'disabled';
                    $href= 'javascript:void(0)';
                } else{
                    $href="detail.php?id=".($id-1);
                    $disabled = '';
                }
                ?>
                <a href="<?php echo $href ?> " class="btn <?php echo $disabled;?>">
                    Previous shot
                </a>
                <?php
                if ($id<16){
                    $href="detail.php?id=".($id+1);
                    $disabled = '';
                } else{
                    $disabled= 'disabled';
                    $href= 'javascript:void(0)';
                }
                ?>
                <a href="<?php echo $href ?>" class="btn <?php echo $disabled;?>">
                    Next shot
                </a>
            </p>
        </div>
    </main>
    <?php 
        require 'includes/footer.php'
    ?>
</body>
</html>
