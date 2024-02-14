<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <script src="bootstrap.bundle.min.js" async></script>
    <title>Login</title>
</head>

<body>
    <?php include('maintitle.php'); ?>
    <div class="container text-center main">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card cd">
                    <img src="Img/admin.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Admin</h5>
                        <a href="admin/adminlog.php" class="btn btn-outline-dark btn-lg"> Login </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card cd">
                    <img src="Img/user.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Customer</h5>
                        <a href="User/userlog.php" class="btn btn-outline-dark btn-lg"> Login </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php');?>
</body>

</html>