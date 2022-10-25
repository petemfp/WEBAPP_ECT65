<?php
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];

if ($user == "admin" && $pass == "ad1234") {
    $_SESSION['username'] = "admin";
    $_SESSION['role'] = "a";
    $_SESSION['id'] = session_id();
} elseif ($user == "member" && $pass == "mem1234") {
    $_SESSION['username'] = "member";
    $_SESSION['role'] = "m";
    $_SESSION['id'] = session_id();
} else {
    $_SESSION['error'] = "error";
    header("location:login.php");
    die();
}
header("location:index.php");
die();
