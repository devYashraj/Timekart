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
    <script>
        function confirmOrder(){
            var ok = confirm("Are you sure you want to place the order?");
            if(ok != true){
                return false;
            }
            else{
                print();
                return true;
            }
        }
    </script>
    <title>Timekart | Order</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="main-cont cartTable">
        <table class="table">
            <h1>Receipt</h1>
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
                $cart = $_SESSION['cart'];
                $qry = "select * from $cart";
                $uname = $_SESSION['uname'];
                $qry2 = "select * from users where uname = '$uname'";
                $result2 = mysqli_query($conn, $qry2) or die("Error in cart");
                $row2 = mysqli_fetch_assoc($result2);
                $result = mysqli_query($conn, $qry) or die("Error in cart");
                $num = mysqli_num_rows($result);
                if($num == 0){
                    mysqli_close($conn);
                    echo "<h1>OOPS! Your Cart is Empty</h1>";
                }
                else{
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
                                {$row['qty']}
                            </td>
                        remove;
                        echo $str;
                        $i++;
                        $sum += intval($row['price']);
                        $qtyNum += intval($row['qty']);
                    }
                    echo '<tr class="table-dark">';
                    echo '<td colspan="3">' . "Total" . "</td>";
                    echo '<td>' . "$sum" . "/-</td>";
                    echo '<td>' . "$qtyNum" . "</td>";
                    echo "</tr>";
                    echo '<tr class="table-light">';
                    echo '<td colspan="2">' . "Customer Name" . "</td>";
                    echo '<td colspan="3">' . "{$row2['name']}" . "</td>";
                    echo "</tr>";
                    echo '<tr class="table-light">';
                    echo '<td colspan="2">' . "Delivery Address" . "</td>";
                    echo '<td colspan="3">' . "{$row2['addr']}" . "</td>";
                    echo "</tr>";
                    echo '<tr class="table-dark">';
                    echo '<td colspan="2">' . "Mobile No" . "</td>";
                    echo '<td colspan="3">' . "{$row2['phno']}" . "</td>";
                    echo "</tr>";
                    echo '</tbody>';
                    echo '</table>';
                    mysqli_close($conn);
                    echo '<form onsubmit="return confirmOrder();" method="post" action="dbFetch.php"> <input type="submit" value="Confirm & Place Order" name="order" onclick="placeOrder();" class="btn btn-outline-dark btn-lg dispnon"></form>';
                }
                ?>
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>