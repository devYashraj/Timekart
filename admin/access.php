<?php
session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] != true) {
        header("Location: ../login.php");
    }
} else {
    header("Location: ../login.php");
}
?>