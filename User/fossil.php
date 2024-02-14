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
    <title>Timekart | Fossil</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="main-cont">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/fossil1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fossil Prime</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Black <br>Price: Rs 9,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="fossil1" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/fossil2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fossil Spartan</h5>
                        <p class="card-text">Strap Material: Leather <br> Strap Colour: Black <br>Price: Rs 10,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="fossil2" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/fossil3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fossil Snapdragon</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Silver <br>Price: Rs 24,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="fossil3" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/fossil4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fossil Mist</h5>
                        <p class="card-text">Strap Material: Leather <br> Strap Colour: Blue <br>Price: Rs 8,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="fossil4" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/fossil5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fossil Jacqueline</h5>
                        <p class="card-text">Strap Material: Leather <br> Strap Colour: Green <br>Price: 6,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="fossil5" name="prodId">
                            <input type="submit" name="add" value="Add to Cart" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card cd">
                    <img src="../Img/fossil6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fossil Daisy</h5>
                        <p class="card-text">Strap Material: Steel <br> Strap Colour: Copper <br>Price: Rs 15,500</p>
                        <form action="dbFetch.php" method="post">
                            <input type="hidden" value="fossil6" name="prodId">
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