<?php
session_start();
if (isset($_SESSION['id'])) {
    header("location:index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<?php

?>

<body>
    <h1 style="text-align: center">Webboard Kakkak</h1>
    <hr>
    <div align="center">
        เข้าสู่ระบบด้วย<br>
        <?php
        if ($_POST["username"] == "admin" && $_POST["password"] == "ad1234") {
            echo "ยินดีตอนรับคุณ ADMIN";
            $_SESSION['username'] = 'admin';
            $_SESSION['role'] = 'a';
            $_SESSION['id'] = session_id();
        } elseif ($_POST["username"] == "member" && $_POST["password"] == "mem1234") {
            echo "ยินดีตอนรับคุณ MEMBER";
            $_SESSION['username'] = 'member';
            $_SESSION['role'] = 'm';
            $_SESSION['id'] = session_id();
        } else {
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        }
        ?>
        <br>
        <a href="index.php">กลับไปหน้าหลัก</a>
    </div>
</body>

</html>