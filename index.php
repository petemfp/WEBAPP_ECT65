<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard KakKak</title>
    <!-- <style>
        a:link {
            color: #000000;
            background-color: transparent;
            text-decoration: none
        }

        a:visited {
            color: #000000;
            background-color: transparent;
            text-decoration: none
        }

        a:hover {
            color: #ff0000;
            background-color: transparent;
            text-decoration: underline
        }

        a:active {
            color: #ff0000;
            background-color: transparent;
            text-decoration: underline
        }
    </style> -->
</head>
<?php
if (!isset($_SESSION['id'])) {
?>

    <body>
        <h1 style="text-align:center ;">Webboard KakKak</h1>
        <hr>
        หมวดหมู่ : <select name="category">
            <option value="all">--ทั้งหมด--</option>
            <option value="general">เรื่องทั่วไป</option>
            <option value="study">เรื่องเรียน</option>
        </select>
        <a href="login.php" style="float: right ;">เข้าสู้ระบบ</a>
        <ul style="list-style-type: square">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<li><a href=post.php?id=$i>กระทู้ที่ $i</a></li>";
            }
            ?>
        </ul>
    </body>
<?php
} else {
?>

    <body>
        <h1 style="text-align:center ;">Webboard KakKak</h1>
        <hr>
        หมวดหมู่ : <select name="category">
            <option value="all">--ทั้งหมด--</option>
            <option value="general">เรื่องทั่วไป</option>
            <option value="study">เรื่องเรียน</option>
        </select>
        <div style="float: right;">
            ผู้ใช้งานระบบ : <?php echo $_SESSION['username'] ?>&nbsp;&nbsp;
            <a href="logout.php">ออกจากระบบ</a>
        </div>
        <br>
        <a href="newpost.php">สร้างกระทู้ใหม่</a>

        <ul style="list-style-type: square">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<li>";
                echo "<a href=post.php?id=$i>กระทู้ที่ $i</a>";
                if ($_SESSION['role'] == 'a') {
                    echo "<a href=delete.php?id=$i>&nbsp;ลบ</a>";
                }
                echo "</li>";
            }
            ?>
        </ul>
    </body>
<?php
}
?>

</html>