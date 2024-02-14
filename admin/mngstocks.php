<?php include('access.php');?>
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
		if(window.history.replaceState){
			window.history.replaceState(null, null, window.location.href);
		}
	</script>
    <title>Manage Stocks | Timekart</title>
</head>

<body>
    <?php include('../maintitle.php'); ?>
    <div class="container text-center">
        <form action="" method="POST" class="selectCompany">
            <label for="comp-selc" class="sale">Sort by Company</label>
            <select name="comp" id="comp-selc">
                <option selected value="all">ALL</option>
                <option value="Tissot">Tissot</option>
                <option value="Rado">Rado</option>
                <option value="Titan">Titan</option>
                <option value="Fossil">Fossil</option>s
                <option value="Casio">Casio</option>
                <option value="Garmin">Garmin</option>
            </select>
            <button id="go" name="sort" value="Go" class="sale">Go</button>
        </form>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Brand</th>
                <th scope="col">Product Name</th>
                    <th scope="col">Stock Status</th>
                    <th scope="col">-</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php
                    include('connect.php');
                    $qry1 = "select * from products order by srno";
                    if (isset($_POST['sort'])) {
                        if ($_POST['comp'] == "all")
                            $qry1 = "select * from products order by srno";
                        else
                            $qry1 = "select * from products where prodBrand = '{$_POST['comp']}' order by srno";
                    } 
                    $result = mysqli_query($conn, $qry1);
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['stock'] == 'in')
                            $stock = "In-Stock";
                        else
                            $stock = "Out-of-Stock";
                        $str = <<<table
                            <tr>
                                <td>$i</td>
                                <td>{$row['prodBrand']}</td>
                                <td>{$row['prodName']}</td>
                                <td>$stock</td>
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" name="prodId" value="{$row['prodId']}">
                                        <input class="btn btn-outline-warning btc" type="submit" name="CST" value="Change Stock Status"> 
                                    </form>
                                </td>
                            </tr>
                        table;
                        echo $str;
                        $i++;
                    }
                    mysqli_close($conn);
                ?>

                <?php
                    include('connect.php');
                    if(isset($_POST['CST'])){
                        $prodId = $_POST['prodId'];
                        $qry = "select * from products where prodId = '$prodId'";
                        $result = mysqli_query($conn, $qry);
                        $row = mysqli_fetch_assoc($result);
                        if($row['stock'] == 'in')
                            $qry = "update products set stock='out' where prodId = '$prodId'";
                        else
                            $qry = "update products set stock='in' where prodId = '$prodId'";
                        mysqli_query($conn, $qry) or die("Error in Query");
                        mysqli_close($conn);
                        echo "<script> alert('Status Changed Successfully'); location.reload();</script>";
                    }
                ?>
            </tbody>
        </table>
        <a href="logout.php" class="btn btn-outline-dark btn-lg lgout"> Logout </a>
    </div>
    <?php include('../footer.php'); ?>
</body>

</html>