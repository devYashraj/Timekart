<?php
session_start();
if (isset($_SESSION['uregistered'])) {
    if ($_SESSION['uregistered'] == true)
        echo '<script>history.forward();</script>';
}
include('connect.php');
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
    <script defer type="text/javascript" src="../bootstrap.bundle.min.js"></script>
    <script defer type="text/javascript" src="userreg.js"></script>
    <title>Create Account | Timekart</title>
</head>

<body>
    <?php include('../maintitle.php'); ?>
    <div class="container regfrm">
        <div class="card cdr">
            <h5 class="card-title text-center">Registration Form</h5>
            <div class="card-body">
                <form id="form" action="dbFetch.php" method="post" novalidate>
                    <div class="row">
                        <div class="col">
                            <label class="frmlbl" for="fname">First Name</label>
                            <input name="fname" type="text" class="form-control frminp" placeholder="Steve" id="fname"
                                required>
                            <div class="error"></div>
                        </div>
                        <div class="col">
                            <label class="frmlbl" for="lname">Last Name</label>
                            <input name="lname" type="text" class="form-control frminp" placeholder="Rogers" id="lname"
                                required>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="frmlbl" for="fname">Ph No</label>
                            <input name="phno" type="tel" class="form-control frminp" placeholder="7985484888" id="phno"
                                required>
                            <div class="error"></div>
                        </div>
                        <div class="col">
                            <label class="frmlbl" for="lname">Email ID</label>
                            <input name="eml" type="email" class="form-control frminp" placeholder="steve@example.com"
                                id="eml" required>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="frmlbl" for="addr2">Address</label>
                            <input name="addr1" type="text" class="form-control frminp"
                                placeholder="Flat No, Building, Area, Landmark" id="addr1" required>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="frmlbl" for="city">City</label>
                            <input name="city" type="text" class="form-control frminp" placeholder="Pune" id="city"
                                required>
                            <div class="error"></div>
                        </div>
                        <div class="col">
                            <label class="frmlbl" for="uname">Set a Username (only letters & numbers)</label>
                            <input name="uname" type="text" class="form-control frminp" placeholder="abcd123" id="uname"
                                required>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="pswd1" class="frmlbl">Set a Password (Min 8 characters)</label>
                            <input name="pswd1" type="password" class="form-control frminp" id="pswd1" required>
                            <div class="error"></div>
                        </div>
                        <div class="col">
                            <label for="pswd2" class="frmlbl">Confirm Password</label>
                            <input name="pswd2" type="password" class="form-control frminp" id="pswd2" required>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="sq1" class="frmlbl">Security Q1 (Favourite Colour)</label>
                            <input name="sq1" type="text" class="form-control frminp" id="sq1"
                                placeholder="Enter your favourite Colour" required>
                            <div class="error"></div>
                        </div>
                        <div class="col">
                            <label for="sq2" class="frmlbl">Security Q2 (Favourite Movie)</label>
                            <input name="sq2" type="text" class="form-control frminp" id="sq2"
                                placeholder="Enter your favourite movie" required>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <input name="register" type="submit" class="btn btn-outline-dark frmlbl btnr">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include('../footer.php'); ?>

</body>

</html>