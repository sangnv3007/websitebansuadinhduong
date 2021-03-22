<?php 
    session_start(); 
    if (isset($_SESSION['account']))
    {
        unset($_SESSION['account']); // xóa session login
        header("location: index.php");
    }
    if (isset($_SESSION['user']))
    {
        unset($_SESSION['user']); // xóa session login
        header("location: index.php");
    }
?>