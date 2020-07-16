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
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link current" href="shop.php">SHOP</a>
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

    <!-- BREADCRUMB START -->
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item current" aria-current="page">Shop</li>
            </ol>
        </nav>
    </div>
    <!-- BREADCRUMB END -->

    <div class="jumbotron jumbotron-fluid shop-tron">
        <div class="container container-fluid shop-tron-content">
        </div>
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 col-lg-3 align-item-stretch">
                <div class="card product mb-3 h-100">
                    <a href="includes/details-marron.php"><img src="img/brownScarf.png" class="card-img-top"></a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="includes/details-marron.php">Marron Head Wrap</a></h5>
                        <p class="card-text shop-product-price text-center">$15.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 align-item-stretch">
                <div class="card product mb-3 h-100">
                    <a href="includes/details-bleu.php" class="card-img-link"><img src="img/blueScarf.png" class="card-img-top"></a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="includes/details-bleu.php">Bleu Fonce Head Scarf</a></h5>
                        <p class="card-text shop-product-price text-center">$15.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 align-item-stretch">
                <div class="card product mb-3 h-100">
                    <a href="includes/details-orange.php" class="card-img-link"><img src="img/goldScarf.png" class="card-img-top"></a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="includes/details-orange.php">Orange Deux Head Wrap</a></h5>
                        <p class="card-text shop-product-price text-center">$15.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 align-item-stretch">
                <div class="card product mb-3 h-100">
                    <a href="includes/details-cyan.php" class="card-img-link"><img src="img/cyanScarf.png" class="card-img-top"></a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="includes/details-cyan.php">Cyan Fort Head Wrap</a></h5>
                        <p class="card-text shop-product-price text-center">$15.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 align-item-stretch">
                <div class="card product mb-3 h-100">
                    <a href="includes/details-marron.php"><img src="img/brownScarf.png" class="card-img-top"></a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="includes/details-marron.php">Marron Head Wrap</a></h5>
                        <p class="card-text shop-product-price text-center">$15.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 align-item-stretch">
                <div class="card product mb-3 h-100">
                    <a href="includes/details-bleu.php" class="card-img-link"><img src="img/blueScarf.png" class="card-img-top"></a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="includes/details-bleu.php">Bleu Fonce Head Wrap</a></h5>
                        <p class="card-text shop-product-price text-center">$15.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 align-item-stretch">
                <div class="card product mb-3 h-100">
                    <a href="includes/details-orange.php" class="card-img-link"><img src="img/goldScarf.png" class="card-img-top"></a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="includes/details-orange.php">Orange Deux Head Scarf</a></h5>
                        <p class="card-text shop-product-price text-center">$15.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 align-item-stretch">
                <div class="card product mb-3 h-100">
                    <a href="includes/details-cyan.php" class="card-img-link"><img src="img/cyanScarf.png" class="card-img-top"></a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="includes/details-cyan.php">Cyan Fort Head Scarf</a></h5>
                        <p class="card-text shop-product-price text-center">$15.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('includes/footer.php');
    include('includes/scripts.php');
    ?>
</body>

</html>