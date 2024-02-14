<?php include('access.php');?>
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
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <title>My Orders | Timekart</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="main-cont cartTable text-center">
    <?php
        include('connect.php');
        $uname = $_SESSION['uname'];
        $qry = "select * from orders where uname = '$uname'";
        $result = mysqli_query($conn, $qry) or die("Error");
        $num = mysqli_num_rows($result);
        if ($num == 0)
            echo "<script>alert('OOPS! No Orders Found!'); history.go(-1);</script>";
        mysqli_close($conn);
    ?>
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
                include('connect.php');
                $uname = $_SESSION['uname'];
                $qry = "select distinct date, uname, name, addr from orders where uname = '$uname'";
                $result = mysqli_query($conn, $qry) or die("Error");
                while($row = mysqli_fetch_assoc($result)){
                    $str = <<<orders
                        <tr>
                            <td>{$row['date']}</td>
                            <td>{$row['uname']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['addr']}</td>
                            <td>
                                <form method="post" action="myorderdetails.php">
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
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>