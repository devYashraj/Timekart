<!DOCTYPE html>
<?php include('access.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="main_cont.css">
    <script src="../bootstrap.bundle.min.js" async></script>
    <title>Timekart | Garmin</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="main-cont">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/garmin1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Garmin Venue</h5>
                        <p class="card-text">Strap Material: Silicon <br> Strap Colour: Grey <br>Price: Rs 25,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="garmin1" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/garmin2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Garmin Forerunner</h5>
                        <p class="card-text">Strap Material: Silicon <br> Strap Colour: Black <br>Price: Rs 35,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="garmin2" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/garmin3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Garmin Music</h5>
                        <p class="card-text">Strap Material: Silicon <br> Strap Colour: Grey <br>Price: Rs 25,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="garmin3" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/garmin4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Garmin Lily</h5>
                        <p class="card-text">Strap Material: Silicon <br> Strap Colour: Brown <br>Price: Rs 19,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="garmin4" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/garmin5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Garmin Sentinel</h5>
                        <p class="card-text">Strap Material: Silicon <br> Strap Colour: Black <br>Price: Rs 35,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="garmin5" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/garmin6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Garmin Instinct</h5>
                        <p class="card-text">Strap Material: Silicon <br> Strap Colour: Black <br>Price: Rs 45,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="garmin6" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>