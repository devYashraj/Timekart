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
    <title>Timekart | Titan</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="main-cont">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/titan1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titan Swamp</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Greenish Gold <br>Price: Rs 9,999</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="titan1" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/titan2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titan Rust</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Copper <br>Price: Rs 8,999</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="titan2" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/titan3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titan Sparrow</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Gold <br>Price: Rs 5,999</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="titan3" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/titan4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titan Elite</h5>
                        <p class="card-text">Strap Material: Leather <br> Strap Colour: Black <br>Price: Rs 4,999</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="titan4" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/titan5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titan Knight</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Silver <br>Price: Rs 12,999</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="titan5" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/titan6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titan Treasure</h5>
                        <p class="card-text">Strap Material: Leather <br> Strap Colour: Black <br>Price: Rs 10,999</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="titan6" name="prodId">
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