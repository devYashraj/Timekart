<?php include('access.php');
include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="../login.css">
    <link rel="stylesheet" href="admin.css">
    <script src="../bootstrap.bundle.min.js" async></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <title>All Orders | Timekart</title>
</head>

<body>
    <?php include('../maintitle.php'); ?>
    <div class="container text-center">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Date & Time</th>
                    <th scope="col">Username</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">+</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php
                $qry = "select distinct date, uname, name, addr from orders";
                $result = mysqli_query($conn, $qry) or die("Error");
                while($row = mysqli_fetch_assoc($result)){
                    $str = <<<orders
                        <tr>
                            <td>{$row['date']}</td>
                            <td>{$row['uname']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['addr']}</td>
                            <td>
                                <form method="post" action="orderdetails.php">
                                    <input type="hidden" name="date" value="{$row['date']}"> 
                                    <input type="hidden" name="uname" value="{$row['uname']}"> 
                                    <input type="hidden" name="name" value="{$row['name']}"> 
                                    <input class="btn btn-outline-info btc" type="submit" name="details" value="View Details"> 
                                </form>
                            </td>
                        </tr>
                    orders;
                    echo $str;
                }
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
        <a href="logout.php" class="btn btn-outline-dark btn-lg lgout"> Logout </a>
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>