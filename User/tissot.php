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
    <title>Timekart | Tissot</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="main-cont">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/tissot1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tissot Heritage</h5>
                        <p class="card-text">Strap Material: Leather <br> Strap Colour: Brown <br>Price: Rs 53,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="tissot1" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/tissot2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tissot Visodate</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Silver <br>Price: Rs 1,30,000</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="tissot2" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/tissot3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tissot Flamingo</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Copper <br>Price: Rs 35,000</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="tissot3" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/tissot4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tissot T-Lady</h5>
                        <p class="card-text">Strap Material: Leather <br> Strap Colour: Beige <br>Price: Rs 29,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="tissot4" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/tissot5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tissot PRX</h5>
                        <p class="card-text">Strap Material: Leather <br> Strap Colour: Blue <br>Price: Rs 28,000</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="tissot5" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/tissot6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tissot Chrono</h5>
                        <p class="card-text">Strap Material: Leather <br> Strap Colour: Brown <br>Price: Rs 1,22,000</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="tissot6" name="prodId">
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