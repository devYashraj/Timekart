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
    <title>Business Report | Timekart</title>
</head>

<body>
    <?php include('../maintitle.php'); ?>
    <div class="container text-center">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th colspan="2" scope="col">Business Report</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php
                $qry = "select * from users";
                $result = mysqli_query($conn, $qry) or die("Error");
                $numofusers = mysqli_num_rows($result);

                $qry = "select * from products where sold in (select MAX(sold) from products) order by prodId";
                $result = mysqli_query($conn, $qry) or die("Error");
                $row = mysqli_fetch_assoc($result);
                $maxsoldprod = $row['prodName'];
                
                $qry = "select distinct addr from orders";
                $result = mysqli_query($conn, $qry) or die("Error");
                $orders = mysqli_num_rows($result);
                $str = <<<orders
                        <tr>
                            <td>Number of Registered Users</td>
                            <td>$numofusers</td>
                        </tr>
                        <tr>
                            <td>Most Sold Product</td>
                            <td>$maxsoldprod</td>
                        </tr>
                        <tr>
                            <td>Total Orders Received</td>
                            <td>$orders</td>
                        </tr>
                    orders;
                    echo $str;
                    mysqli_close($conn);
                ?>
            </tbody>
        </table>
        <a href="logout.php" class="btn btn-outline-dark btn-lg lgout"> Logout </a>
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>