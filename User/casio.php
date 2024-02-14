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
    <title>Timekart | Casio</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="main-cont">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/casio1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Casio Commando</h5>
                        <p class="card-text">Strap Material: Silicon <br> Strap Colour: Green <br>Price: Rs 25,000</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="casio1" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/casio2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Casio Samurai</h5>
                        <p class="card-text">Strap Material: Silicon <br> Strap Colour: Black <br>Price: Rs 20,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="casio2" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/casio3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Casio Master</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Silver <br>Price: Rs 15,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="casio3" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/casio4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Casio Bravo</h5>
                        <p class="card-text">Strap Material: Leather <br> Strap Colour: Black <br>Price: Rs 35,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="casio4" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/casio5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Casio Jasmine</h5>
                        <p class="card-text">Strap Material: Silicon <br> Strap Colour: Blue <br>Price: Rs 16,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="casio5" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/casio6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Casio Eagle</h5>
                        <p class="card-text">Strap Material: Silicon <br> Strap Colour: Orange <br>Price: Rs 21,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="casio6" name="prodId">
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