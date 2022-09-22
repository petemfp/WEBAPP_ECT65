้<?php
    session_start();
    if (!isset($_SESSION['id'])) {
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
    <title>Webboard Kakkak</title>
</head>

<body>
    <h1 style="text-align: center;">Webboard Kakkak</h1>
    <hr>

    <table>
        <tr>
            <td>ผู้ใช้ :</td>
            <td colspan="3"><?php echo $_SESSION['username'] ?></td>
        </tr>
        <tr>
            <td>หมวดหมู่ :</td>
            <td colspan="3"><select name="category">
                    <option value="all">--ทั้งหมด--</option>
                    <option value="general">เรื่องทั่วไป</option>
                    <option value="study">เรื่องเรียน</option>
                </select></td>
        </tr>
        <tr>
            <td>หัวข้อ :</td>
            <td colspan="3"><input type="text" name="firstname"></td>
        </tr>
        <tr>
            <td>เนื้อหา :</td>
            <td colspan="3"><textarea name="textarea" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td colspan="4" align="center"><input type="submit" value="บันทึกข้อความ"> </td>
        </tr>
    </table>

</body>

</html>