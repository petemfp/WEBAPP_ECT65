<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>

<body>
    <h1 style="text-align: center">Webboard Kakkak</h1>
    <hr>
    <div align="center">
        เข้าสู่ระบบด้วย<br>
        <?php
        if ($_POST["username"] == "admin1234") {
            echo "ยินดีตอนรับคุณ ADMIN";
        } elseif ($_POST["username"] == "member" && $_POST["password"] == "mem1234") {
            echo "ยินดีตอนรับคุณ MEMBER";
        } else {
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        }
        ?>
        <br>
        <a href="index.php">กลับไปหน้าหลัก</a>
    </div>
</body>

</html>