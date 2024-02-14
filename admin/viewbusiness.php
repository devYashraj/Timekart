<?php include('access.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../login.css">
    <script src="../bootstrap.bundle.min.js" async></script>
    <title>Business | Timekart</title>
</head>

<body>
    <?php include('../maintitle.php'); ?>
    <div class="container text-center main">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card cd">
                    <img src="../Img/summary.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">View Business Report</h5>
                        <a href="businessrep.php" class="btn btn-outline-dark btn-lg"> Proceed </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card cd">
                    <img src="../Img/allorders.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">View all Orders</h5>
                        <a href="orders.php" class="btn btn-outline-dark btn-lg"> Proceed </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="logout.php" class="btn btn-outline-dark btn-lg lgout"> Logout </a>
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>