<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard Kakkak</title>
</head>

<body>
    <h1 style="text-align: center;">Webboard Kakkak</h1>
    <hr>

    <div align="center">
        ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]; ?><br>
        <br>
        <?php
        if ($_GET['id'] % 2 == 0) {
            echo "กระทู้หมายเลขคู๋";
        } else {
            echo "กระทู้หมายเลขคี่";
        }
        ?>
    </div>
    <br>
    <table style="border: 2px solid black; width: 40%" align="center">
        <tr>
            <td colspan="2" style="background-color: #6CD2FE;">เข้าสู่ระบบ</td>
        </tr>
        <tr>
            <td><textarea name="textarea" id="" cols="65" rows="3"></textarea></td>
        </tr>
        <tr>
            <td align="center"><button> ส่งข้อความ</button></td>
        </tr>
        <tr>
            <td align="center"><a href="index.php">กลับไปหน้าหลัก</a></td>
        </tr>

    </table>
</body>

</html>