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
    <link rel="stylesheet" href="main_cont.css">
    <script src="../bootstrap.bundle.min.js" async></script>
    <title>Timekart | Cart</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="main-cont cartTable">
        <?php
        include('connect.php');
        $cart = $_SESSION['cart'];
        $uname = $_SESSION['uname'];
        $qry = "select * from $cart";
        $result = mysqli_query($conn, $qry) or die("Error");
        $num = mysqli_num_rows($result);
        if ($num == 0)
            echo "<script>alert('OOPS! Cart is Empty!'); history.go(-1);</script>";
        mysqli_close($conn);
        ?>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col">-</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php
                include('connect.php');
                $cart = $_SESSION['cart'];
                $qry = "select * from $cart order by prodId";
                $result = mysqli_query($conn, $qry) or die("Error in cart");
                    $i = 1;
                    $sum = 0;
                    $qtyNum = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$i."</td>";
                        echo "<td>".$row['prodBrand']."</td>";
                        echo "<td>".$row['prodName']."</td>";
                        echo "<td>".$row['price']."</td>";
                        $str = <<<remove
                            <td>
                                <form style="display:inline;" action="dbFetch.php" method="POST">	
                                    <button style="border-radius:30px;">-</button>
                                    {$row['qty']}
                                    <input type="hidden" value="{$row['prodId']}" name="minus">
                                </form>
                                <form style="display:inline;" action="dbFetch.php" method="POST">	
                                    <button style="border-radius:30px;">+</button>
                                    <input type="hidden" value="{$row['prodId']}" name="plus">
                                </form>
                            </td>
                            <td>
                                <form action="dbFetch.php" method="POST">
                                    <button class="btn btn-outline-danger">Remove</button>
                                    <input type="hidden" value="{$row['prodId']}" name="remove">
                                </form>	
                            </td>
                        remove;
                        echo $str;
                        $i++;
                        $sum += intval($row['price']) * intval($row['qty']);
                        $qtyNum += intval($row['qty']);
                    }
                    echo '<tr class="table-dark">';
                    echo '<td colspan="3">' . "Total" . "</td>";
                    echo '<td>' . "$sum" . "/-</td>";
                    echo '<td>' . "$qtyNum" . "</td>";
                    echo '<td>' . "" . "</td>";
                    echo "</tr>";
                    echo '</tbody>';
                    echo '</table>';
                    mysqli_close($conn);
                    echo '<a href="order.php" class="btn btn-outline-dark btn-lg"> Place Order </a>';
                ?>
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>