<?php 
include('access.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="../login.css">
    <link rel="stylesheet" href="main_cont.css">
    <script src="../bootstrap.bundle.min.js" async></script>
    <title>Timekart | Order Details</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="main-cont cartTable text-center">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qty</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php
                include('connect.php');
                $name = $_POST['name'];
                $uname = $_POST['uname'];
                $date = $_POST['date'];
                $qry = "select * from orders where uname='$uname' and date='$date'";
                $result = mysqli_query($conn, $qry) or die("Error in order");
                $bill = 0;
                $qtyNum = 0;
                $i = 1;
                $addr = "";
                while ($row = mysqli_fetch_assoc($result)) {
                    $qry2 = "select * from products where prodName = '{$row['prodName']}'";
                    $result2 = mysqli_query($conn, $qry2);
                    $row2 = mysqli_fetch_assoc($result2);
                    $bill += intval($row2['price']) * intval($row['qty']);
                    $qtyNum += intval($row['qty']);
                    $addr = $row['addr'];
                    $str = <<<orders
                        <tr>
                            <td>$i</td>
                            <td>{$row['prodBrand']}</td>
                            <td>{$row['prodName']}</td>
                            <td>{$row2['price']}</td>
                            <td>{$row['qty']}</td>
                        </tr>
                    orders;
                    echo $str;
                    $i++;
                }
                $str = <<<orders
                    <tr class="table-dark">
                        <td colspan="3">Total</td>
                        <td>$bill/-</td>
                        <td>$qtyNum</td>
                    </tr>
                    <tr class="table-light">
                        <td colspan="3">Username</td>
                        <td colspan="2">$uname</td>
                    </tr>
                    <tr class="table-light">
                        <td colspan="3">Customer Name</td>
                        <td colspan="2">$name</td>
                    </tr>
                    <tr class="table-dark">
                        <td colspan="3">Delivery Address</td>
                        <td colspan="2">$addr</td>
                    </tr>
                    orders;
                    echo $str;
                    mysqli_close($conn);
                ?>
            </tbody>
        </table>
        <button onclick="print();" class="btn btn-outline-dark btn-lg dispnon"> Print Receipt </button>
    </div>
    <?php include('../footer.php'); ?>

</body>

</html>