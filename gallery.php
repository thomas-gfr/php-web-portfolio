<?php 
require 'includes/functions.php';
$pages     = isset($_GET['id']) ? $_GET['id'] : 0;

// $nbr    = getCount($id);
$galleryPictures = findPaged(6,6*$pages);

?>

<!doctype html>
<html lang="fr">
<?php require 'includes/head.php' ?>
<body id="gallery">
    <?php require 'includes/header.php' ?>
    <main>
        <div id="hero">
            <h1>My greatest shots</h1>
        </div>
        <div class="container">
            <div id="pictures">
                <?php 
                foreach($galleryPictures as $galleryPicture){
                    $src ='images/medium/'.$galleryPicture['slug'].'.jpg';
                ?>
                <a href="detail.html" title="Picture 1">
                    <img src="<?php echo $src;?>" alt="Picture 1">
                    <br><?php echo $galleryPicture['title']?>
                </a>
                <?php 
                }?>
            </div>
            <p id="pager">
                <a href="javascript:void(0)" class="btn disabled">
                    Previous page
                </a>
                <a href="gallery.html" class="btn">
                    Next page
                </a>
            </p>
        </div>
    </main>
    <?php require 'includes/footer.php' ?>
</body>
</html>
