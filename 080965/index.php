<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>

<body>
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr> หมวดหมู่: <select name="listbox">
                <option value="list1">--ทั้งหมด--</option>
                <option value="list2">เรื่องทั่วไป</option>
                <option value="list3">เรื่องเรียน</option>
            </select>
    <a href="login.html" style="float: right;">เช้าสู่ระบบ</a>
    <ul>
        <?php for($i = 1; $i <= 10; $i++){?>
        <li><a style="color: blue;" target="_blank" href="post.php?id=<?php echo $i ?>">กระทู้ที่ <?php echo $i ?> </a> </li>
    <?php }?>
    </ul>
</body>

</html>