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
                    <a class="nav-link" href="shop.php">SHOP</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>
                <!-- <li class="nav-item px-2">
          <a class="nav-link" href="search.php"><i class="fas fa-search"></i></a>
        </li> -->
                <li class="nav-item px-2">
                    <a class="nav-link cart current" href="cart.php">CART(<span>0</span>)</a>
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
                <li class="breadcrumb-item current" aria-current="page">Cart</li>
            </ol>
        </nav>
    </div>
    <!-- BREADCRUMB END -->

    <div class="container">
        <table class="table table-borderless cart-container products-container">
            <thead class="product-header">
                <tr>
                    <th class="product-title">PRODUCT</th>
                    <th class="price sm-hide">PRICE</th>
                    <th class="quantity">QTY</th>
                    <th class="total">TOTAL</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="products">

            </tbody>
        </table>
    </div>

    <?php
    include('includes/footer.php');
    include('includes/scripts.php');
    ?>
</body>

</html>