<?php
session_start();
if (isset($_SESSION['uregistered'])) {
    if ($_SESSION['uregistered'] == true)
        echo '<script>history.forward();</script>';
}
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == true)
        echo '<script>history.forward();</script>';
}
include('connect.php');
?>

<html lang="en">

<head>
    <link rel="stylesheet" href="../sweetalert.css">
    <script src="../sweetalert.min.js"></script>
</head>

<body>
    <?php
    //for registration
    if (isset($_POST['register'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $addr = $_POST['addr1'] . "," . $_POST['city'];
        $phno = $_POST['phno'];
        $eml = $_POST['eml'];
        $uname = $_POST['uname'];
        $pswd1 = md5($_POST['pswd1']);
        $sq1 = $_POST['sq1'];
        $sq2 = $_POST['sq2'];
        $name = $fname . " " . $lname;
        $qry = "select * from users where uname = '$uname'";
        $result = mysqli_query($conn, $qry) or die("Error while selecting");
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            mysqli_close($conn);
            $_SESSION['uregistered'] = false;
            echo '<script>alert("Username already exists");history.go(-1);</script>';

        } else {
            $qry = "insert into users values ('$name','$phno','$eml','$addr','$uname','$pswd1','$sq1','$sq2');";
            mysqli_query($conn, $qry) or die("Error while Inserting");
            $_SESSION['uregistered'] = true;
            $cartName = $uname . "cart";
            $qry = "create table $cartName (prodId varchar(10), prodName varchar(20), prodBrand varchar(20), price varchar(10), qty varchar(10))";
            mysqli_query($conn, $qry) or die("Error in Cart Query");
            mysqli_close($conn);
            $str = <<<reloadPrevent
                <script>
                if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
                </script>
            reloadPrevent;
            echo $str;
            echo '<script>swal("Good job!", "You have registered successfully! Now log in", "success");</script>';
            header("Refresh: 5; url = userlog.php");
        }
    }
    //for login
    if (isset($_POST['login'])) {
        $uname = $_POST['uname'];
        $pswd = md5($_POST['pswd']);
        $str = <<<reloadPrevent
                <script>
                if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
                </script>
            reloadPrevent;
        echo $str;
        $qry = "select * from users where pwd = '$pswd' and uname = '$uname'";
        $result = mysqli_query($conn, $qry) or die("Error while login");
        $num = mysqli_num_rows($result);
        mysqli_close($conn);
        if ($num == 1) {
            echo "<script>alert('Logged in successfully');</script>";
            $_SESSION['login'] = true;
            $_SESSION['uname'] = $uname;
            $_SESSION['cart'] = $uname . "cart";
            header("Refresh: 2; url = timeHome.php");
        } else {
            echo "<script>alert('Login failed'); history.go(-1);</script>";
        }
    }
    // for cart add
    if (isset($_POST['add'])) {
        $cart = $_SESSION['cart'];
        $prodId = $_POST['prodId'];
        $qry = "select * from $cart";
        $result = mysqli_query($conn, $qry) or die("Error in cart");
        $num = mysqli_num_rows($result);
        if($num == 5){
            echo "<script>alert('Cart Limit Reached'); history.go(-1);</script>";
            mysqli_close($conn);
        } else {
            $qry = "select * from $cart where prodId = '$prodId'";
            $result = mysqli_query($conn, $qry) or die("Error in cart");
            $num = mysqli_num_rows($result);
            if ($num == 1) {
                mysqli_close($conn);
                echo "<script>alert('Already in Cart'); history.go(-1);</script>";
            } else {
                $qry = "select * from products where prodId = '$prodId'";
                $result = mysqli_query($conn, $qry) or die("Error in cart");
                $row = mysqli_fetch_assoc($result);
                $stock = $row['stock'];
                if ($stock == "out") {
                    echo "<script>alert('Out of Stock'); history.go(-1);</script>";
                    mysqli_close($conn);
                }
                $prodName = $row['prodName'];
                $prodBrand = $row['prodBrand'];
                $price = $row['price'];
                $qry = "insert into $cart values('$prodId','$prodName','$prodBrand','$price','1');";
                mysqli_query($conn, $qry) or die("Error in cart");
                mysqli_close($conn);
                echo "<script>alert('Successfully added to cart'); history.go(-1);</script>";
            }
        }
    }
    if (isset($_POST['plus'])) {
        $prodId = $_POST['plus'];
        $cart = $_SESSION['cart'];
        $qry = "select * from $cart where prodId = '$prodId'";
        $result = mysqli_query($conn, $qry) or die("Error in Query");
        $row = mysqli_fetch_assoc($result);
        $qty = intval($row['qty']);
        if ($qty == 10) {
            mysqli_close($conn);
            echo "<script>alert('Max limit reached'); history.go(-1);</script>";
        } else {
            $qty += 1;
            $qry = "update $cart set qty = '$qty' where prodId = '$prodId'";
            $result = mysqli_query($conn, $qry) or die("Error in Query");
            mysqli_close($conn);
            echo "<script>history.go(-1);</script>";
        }
    }
    if (isset($_POST['minus'])) {
        $prodId = $_POST['minus'];
        $cart = $_SESSION['cart'];
        $qry = "select * from $cart where prodId = '$prodId'";
        $result = mysqli_query($conn, $qry) or die("Error in Query");
        $row = mysqli_fetch_assoc($result);
        $qty = intval($row['qty']);
        if ($qty == 1) {
            mysqli_close($conn);
            echo "<script>alert('Min limit reached'); history.go(-1);</script>";
        } else {
            $qty -= 1;
            $qry = "update $cart set qty = '$qty' where prodId = '$prodId'";
            $result = mysqli_query($conn, $qry) or die("Error in Query");
            mysqli_close($conn);
            echo "<script>history.go(-1);</script>";
        }
    }
    if (isset($_POST['remove'])) {
        $prodId = $_POST['remove'];
        $cart = $_SESSION['cart'];
        $qry = "delete from $cart where prodId = '$prodId'";
        $result = mysqli_query($conn, $qry) or die("Error in Query");
        mysqli_close($conn);
        echo "<script>alert('Item Removed Successfully'); history.go(-1);</script>";
    }

    //for order
    if (isset($_POST['order'])) {
        $uname = $_SESSION['uname'];
        $cart = $_SESSION['cart'];
        $qry1 = "select * from $cart order by prodId";
        $qry2 = "select * from users where uname='$uname'";
        $result1 = mysqli_query($conn, $qry1) or die("Error in orders1");
        $result2 = mysqli_query($conn, $qry2) or die("Error in orders1");
        $row2 = mysqli_fetch_assoc($result2);
        while ($row1 = mysqli_fetch_assoc($result1)) {
            date_default_timezone_set("Asia/Calcutta");
            $date = date('d-m-y H:i:s');
            $qry3 = "insert into orders values('{$row1['prodName']}','{$row1['prodBrand']}','{$row2['uname']}','{$row2['name']}','{$row2['addr']}','{$row2['phno']}','{$row1['qty']}','{$date}')";
            mysqli_query($conn, $qry3) or die(mysqli_error($conn));

            $qry4 = "select * from products where prodId = '{$row1['prodId']}'";
            $result4 = mysqli_query($conn, $qry4) or die("Error in orders2");
            $row4 = mysqli_fetch_assoc($result4);
            $newQty = intval($row4['sold']) + intval($row1['qty']);
            $qry4 = "update products set sold='$newQty' where prodId = '{$row1['prodId']}'";
            mysqli_query($conn, $qry4) or die("Error in orders3");
        }
        $qry = "truncate table $cart";
        mysqli_query($conn, $qry) or die("Error in orders");
        echo "<script> alert('Order Placed Successfully'); </script>";
        header("Refresh: 1; url=timeHome.php");
        mysqli_close($conn);
    }
    //for password recovery
    if (isset($_POST['reacc'])) {
        $uname = $_POST['uname'];
        $qry = "select * from users where uname='$uname'";
        $sq1 = strtolower($_POST['sq1']);
        $sq2 = strtolower($_POST['sq2']);
        $result = mysqli_query($conn, $qry) or die("Error in Query");
        $num = mysqli_num_rows($result);
        if ($num != 0) {
            $row = mysqli_fetch_assoc($result);
            $orsq1 = strtolower($row['sq1']);
            $orsq2 = strtolower($row['sq2']);
            if ($sq1 == $orsq1 && $sq2 == $orsq2) {
                echo "<script> alert('Access Granted!'); </script>";
                $_SESSION['uname'] = $uname;
                header("Refresh: 1; url=password.php");
                mysqli_close($conn);
            } else {
                echo "<script>alert('Wrong Details Entered'); history.go(-1);</script>";
                mysqli_close($conn);
            }
        } else {
            echo "<script>alert('Wrong Details Entered'); history.go(-1);</script>";
            mysqli_close($conn);
        }
    }
    //for password change
    if (isset($_POST['pwdchng'])) {
        $p1 = md5($_POST['p1']);
        $uname = $_SESSION['uname'];
        $qry = "update users set pwd = '$p1' where uname = '$uname'";
        mysqli_query($conn, $qry) or die("Error in Query");
        mysqli_close($conn);
        echo "<script> alert('Password Changed Successfully!'); </script>";
        header("Refresh: 1; url=userlog.php");
    }
    ?>


</body>

</html>