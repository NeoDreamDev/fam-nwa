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
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="shop.php">SHOP</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link current" href="about.php">ABOUT</a>
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
                <li class="breadcrumb-item current" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
    <!-- BREADCRUMB END -->

    <div class="jumbotron jumbotron-fluid about-tron">
        <div class="container pt-5">
        </div>
    </div>

    <div class="container">
        <div class="about-info">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque fuga, omnis magni autem sint expedita
                facilis, excepturi blanditiis quae praesentium in esse distinctio delectus. Nisi natus reprehenderit
                repellendus animi quia, blanditiis nam ab odit saepe minima, possimus praesentium eum hic voluptates
                quisquam! Nihil nesciunt, quis suscipit temporibus voluptatibus magnam cumque!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut laboriosam id quos voluptatibus iure! Sit
                dolor pariatur ad dolores quidem obcaecati, reiciendis magnam explicabo facilis voluptas laudantium eum,
                debitis ab.</p>
            <p class="small-scrn">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque fuga, omnis magni
                autem sint expedita
                facilis, excepturi blanditiis quae praesentium in esse distinctio delectus. Nisi natus reprehenderit
                repellendus animi quia, blanditiis nam ab odit saepe minima, possimus praesentium eum hic voluptates
                quisquam! Nihil nesciunt, quis suscipit temporibus voluptatibus magnam cumque!</p>
            <p class="small-scrn">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut laboriosam id quos
                voluptatibus iure! Sit
                dolor pariatur ad dolores quidem obcaecati, reiciendis magnam explicabo facilis voluptas laudantium eum,
                debitis ab.</p>
        </div>
    </div>

    <?php
    include('includes/footer.php');
    include('includes/scripts.php');
    ?>
</body>

</html>