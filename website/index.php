<!DOCTYPE html>
<HTML lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thumb-Busters</title>
        <link rel="stylesheet" href="css/site.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <script src="js/site.js"></script>
    </head>
   <body>
    <?php 
            include 'header.php';
        ?>
    <main>
    <!-- HERO -->
    <?php 
            include 'herobanner.php'
    ?>
    <!-- BRANDS -->
    <section class="brands">
        <h2>Shop By Brand</h2>
        <div class="brand-grid">
            <div class="brand">
                <a href="#"><img src="img/playstation.png" alt="PlayStation"></a>
            </div>
            <div class="brand">
                <a href="#"><img src="img/xbox.png" alt="Xbox"></a> 
            </div>
            <div class="brand">
                <a href="#"><img src="img/nintendo.png" alt="Nintendo"></a>
            </div>
            <div class="brand">
                <a href="#"><img src="img/sega.png" alt="Sega"></a>
            </div>
            <div class="brand">
                <a href="#"><img src="img/atari.png" alt="Atari"></a>
            </div>
        </div>
    </section>
    <!-- TRENDING -->
    <section class="trending">
        <img src="img/trending-banner.png" alt="Top Trending" loading="lazy">
        <div class="trending-box">
            <div class="box-header">
                Top Trending
            </div>
            <div class="box-content">
                <p>Checkout the top trending products</p>
                <a href="#" class="shop-button">
                    Shop Now
                </a>
            </div>
        </div>
    </section>
    </main>    
    <?php 
            include 'footer.php';
        ?>
</body>
</HTML>