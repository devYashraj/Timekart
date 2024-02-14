<?php include('access.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="main_cont.css">
    <script src="../bootstrap.bundle.min.js" async></script>
    <title>Timekart | Home</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="main-cont">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../Img/banner1.jpg" class="d-block w-100" alt="..">
                </div>
                <div class="carousel-item">
                    <img src="../Img/banner2.jpg" class="d-block w-100" alt="..">
                </div>
                <div class="carousel-item">
                    <img src="../Img/banner5.jpg" class="d-block w-100" alt="..">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="brandcards">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card cd">
                        <a href="tissot.php">
                            <img src="../Img/tissot.jpg" class="card-img-top" alt="...">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card cd">
                        <a href="rado.php">
                            <img src="../Img/rado.jpg" class="card-img-top" alt="...">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card cd">
                        <a href="titan.php">
                            <img src="../Img/titan.jpg" class="card-img-top" alt="...">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card cd">
                        <a href="fossil.php">
                            <img src="../Img/fossil.jpg" class="card-img-top" alt="...">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card cd">
                        <a href="casio.php">
                            <img src="../Img/casio.jpg" class="card-img-top" alt="...">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card cd">
                        <a href="garmin.php">
                            <img src="../Img/garmin.jpg" class="card-img-top" alt="...">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php include('../footer.php'); ?>
</body>

</html>