<?php
include_once 'includes/dbh-inc.php';
?>

<?php include('includes/header.php'); ?>

<body>
    <!-- NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-sm px-5">
        <a class="navbar-brand active" href="/famnwa/index.php">Fam'Nwa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars hamburger"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a class="nav-link current" href="index.php">HOME</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="shop.php">SHOP</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>
                <!-- <li class="nav-item px-2">
          <a class="nav-link" href="search.php"><i class="fas fa-search"></i></a>
        </li> -->
                <li class="nav-item px-2">
                    <a class="nav-link cart" href="cart.php">CART(<span>0</span>)</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- CAROUSEL -->
    <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active  min-vh-100" data-interval="5000">
                <span class="carousel-img-1"></span>
            </div>
            <div class="carousel-item min-vh-100" data-interval="5000">
                <span class="carousel-img-2"></span>
            </div>
            <div class="carousel-item min-vh-100" data-interval="5000">
                <span class="carousel-img-3"></span>
            </div>
        </div>
    </div>
    <!-- CAROUSEL END -->

    <?php
    include('includes/footer.php');
    include('includes/scripts.php');
    ?>

</body>

</html>