<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/fec190a859.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Open+Sans&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/main.css" />
    <title>Fam N'wah</title>
</head>

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

    <div class="container container-fluid pt-5">
        <div class="row">
            <div class="col-md-6">
                <!-- <img class="img-responsive" src="img/blueScarf.png" alt="Blue Head Wrap"> -->
                <div id="carouselExampleControls" class="carousel h-auto slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/blueScarf.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/blueScarf.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/blueScarf.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Bleu Fonce Head Wrap</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="product-price">$15.00</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dicta, ut natus blanditiis voluptatibus doloribus.</p>
                        <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dicta, ut natus blanditiis voluptatibus doloribus.</p>
                        <p class="product-description"><strong>*Products may take 7 - 10 business days to ship.</strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Qty.</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class=" py-3">
                        <a href="" class="add-cart text-center">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="mt-5 pt-5 text-center">
            <a href="details.php" class="social-media"><i class="fab fa-instagram fa-2x p-2 icon"></i></a>
            <a href="#" class="social-media"><i class="far fa-envelope fa-2x p-2 icon"></i></a>
            <ul class="nav justify-content-center pb-2">
                <li class="nav-item"><a href="policies.php" class="nav-link">POLICIES</a></li>
                <li class="nav-item"><a href="#" class="nav-link">NEWSLETTER</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">CONTACT</a></li>
            </ul>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <script src="js/main.js"></script>
</body>

</html>