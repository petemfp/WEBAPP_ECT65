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

// <?php
// session_start();
// $user = $_POST['username'];
// $pass = $_POST['password'];

// if (isset($_SESSION['username']) && $_SESSION['id'] == session_id()) {
//     header("location:index.php");
//     die();
// }

// $u = $_POST['login'];
// $p = $_POST['pass'];

// $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
// $sql = "SELECT * FROM user where login='$u' and password=sha1('$p') ";
// $result = $conn->query($sql);

// if ($result->rowCount() == 1) {
//     $data = $result->fetch(PDO::FETCH_ASSOC);
//     $_SESSION['username'] = $data['login'];
//     $_SESSION['role'] = $data['role'];
//     $_SESSION['user_id'] = $data['id'];
//     $_SESSION['id'] = session_id();
//     header("location:index.php");
//     die();
// } else {
//     $_SESSION['error'] = 1;
//     header("location:login.php");
//     die();
// }
// $conn = null;

