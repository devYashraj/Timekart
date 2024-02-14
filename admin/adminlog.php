<?php
session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == true)
        echo '<script>history.forward();</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../login.css">
    <link rel="stylesheet" href="userlog.css">
    <title>Customer Login</title>
</head>

<body>
    <?php
    include('connect.php');
    if (isset($_SESSION['uregistered'])) {
        if ($_SESSION['uregistered'] == true)
            echo '<script>swal("Good job!", "You have registered successfully! Now log in", "success");</script>';
    }
    ?>
    <?php include('../maintitle.php'); ?>
    <br><br>
    <div class="logfrm container text-center">
        <div class="row">
            <div class="col-12">
                <div class="card cdlog">
                    <h5 class="card-title">Admin Login</h5>
                    <div class="card-body">
                        <form class="form-inline" action="dbFetch.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend inpcred">
                                        <div class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25"
                                                fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                        placeholder="Username" name="uname">
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend inpcred">
                                        <div class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="25"
                                                fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <input type="password" class="form-control" id="inlineFormInputGroupUsername"
                                        placeholder="Password" name="pswd">
                                </div>
                            </div>
                            <br>
                            <input type="submit" value="Login" name="login" class="btn btn-outline-dark btn-lg">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>