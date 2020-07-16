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
    <div class="container policy-container">
        <div class="policies text-center">
            <h3>SHIPPING AND HANDLING</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque fuga, omnis magni autem sint expedita
                facilis, excepturi blanditiis quae praesentium in esse distinctio delectus. Nisi natus reprehenderit
                repellendus animi quia, blanditiis nam ab odit saepe minima, possimus praesentium eum hic voluptates
                quisquam! Nihil nesciunt, quis suscipit temporibus voluptatibus magnam cumque!</p>
            <hr>
            <h3>RETURNS/EXCHANGES</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut laboriosam id quos voluptatibus iure! Sit
                dolor pariatur ad dolores quidem obcaecati, reiciendis magnam explicabo facilis voluptas laudantium eum,
                debitis ab.</p>
            <hr>
            <h3>QUESTIONS/COMMENTS</h3>
            <p>We would love to here from you! Get in touch via our <a href="contact.php">CONTACT</a> page.</p>
        </div>
    </div>

    <?php
    include('includes/footer.php');
    include('includes/scripts.php');
    ?>

</body>

</html>