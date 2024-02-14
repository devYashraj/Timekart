<?php
session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == true)
        echo '<script>history.forward();</script>';
    else
        header("Location: adminlog.php");
}
include('connect.php');
?>

<?php
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
    $qry = "select * from admins where pwd = '$pswd' and uname = '$uname'";
    $result = mysqli_query($conn, $qry) or die("Error while login");
    $num = mysqli_num_rows($result);
    mysqli_close($conn);
    if ($num == 1) {
        echo "<script>alert('Logged in successfully');</script>";
        $_SESSION['login'] = true;
        header("Refresh: 2; url = adminHome.php");
    } else {
        echo "<script>alert('Login failed'); history.go(-1);</script>";
    }
}
?>