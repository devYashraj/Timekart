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
    <title>Timekart | Rado</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="main-cont">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/rado1.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rado HyperChrome</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Silver <br>Price: Rs 1,05,200</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="rado1" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/rado2.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rado Captain Cook</h5>
                        <p class="card-text">Strap Material: Nato <br> Strap Colour: Blue <br>Price: Rs 4,25,900</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="rado2" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/rado3.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rado Chronograph</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Silver <br>Price: Rs 1,25,300</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="rado3" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/rado4.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rado Centrix</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Silver <br>Price: Rs 1,01,900</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="rado4" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/rado5.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rado Square</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Black <br>Price: Rs 2,30,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="rado5" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/rado6.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rado Secret</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Silver <br>Price: Rs 2,25,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="rado6" name="prodId">
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