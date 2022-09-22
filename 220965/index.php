<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>

<?php
if (!isset($_SESSION['id'])) {
?>

    <body>
        <h1 style="text-align: center;">Webboard KakKak</h1>
        <hr> หมวดหมู่: <select name="listbox">
            <option value="list1">--ทั้งหมด--</option>
            <option value="list2">เรื่องทั่วไป</option>
            <option value="list3">เรื่องเรียน</option>
        </select>
        <a href="login.php" style="float: right;">เช้าสู่ระบบ</a>
        <ul>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <li><a style="color: blue;" target="_blank" href="post.php?id=<?php echo $i ?>">กระทู้ที่ <?php echo $i ?> </a> </li>
            <?php } ?>
        </ul>
    </body>
<?php } else { ?>

    <body>
        <h1 style="text-align: center;">Webboard KakKak</h1>
        <hr> หมวดหมู่: <select name="listbox">
            <option value="list1">--ทั้งหมด--</option>
            <option value="list2">เรื่องทั่วไป</option>
            <option value="list3">เรื่องเรียน</option>
        </select>
        <div style="float: right;">
            ผู้ใช้งานระบบ : <?php echo $_SESSION['username'] ?>&nbsp;&nbsp;
            <a href="logout.php">ออกจากระบบ</a>
        </div>
        <br><a href="newpost.php">สร้างกระทู้ใหม่</a>
        <ul>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <li>
                    <a href="post.php?id=<?php echo $i ?>">กระทู้ที่ <?php echo $i ?> </a>
                    <?php if ($_SESSION['role'] == 'a'){ ?> &nbsp;&nbsp;&nbsp;<a href="delete.php?id=<?php echo $i ?>">ลบ</a> <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </body>
<?php } ?>

</html>