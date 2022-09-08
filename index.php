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
    <form>
        <select name="Catagory">
            <option value="All">All</option>
            <option value="General">General</option>
            <option value="Study">Study</option>
        </select>
    </form>

    <a href="login.html" style="float: right;">เข้าสู่ระบบ</a>
    <ul>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<li><a href=post.php?id=$i>กระทู้ที่ $i</a></li>";
        }
        ?>
    </ul>

</body>

</html>