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

    <div class="container container-fluid contact-container">
        <div class="row">
            <div class="col-md-6">
                <img class=" sm-hide contact-img h-100 w-100" src="img/famnwa.jpg" alt="Fam'Nwa Logo">
            </div>
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="name" id="name">Name*</label>
                        <input type="text" required class="form-control" id="name" placeholder="Enter your name...">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email*</label>
                        <input type="email" required class="form-control" id="inputEmail" placeholder="Enter your email...">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Message*</label>
                        <textarea class="form-control" required id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn cusButton">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    include('includes/footer.php');
    include('includes/scripts.php');
    ?>
</body>

</html>