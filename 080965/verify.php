<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
</head>

<body>
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr>
    <div align="center">
        <?php 
            if ($_POST["login"] == "admin" && $_POST["pass"] == "ad1234")
                echo "ยินดีต้อนรับคุณ ADMIN <br>";
            elseif($_POST["login"] == "member" && $_POST["pass"] == "mem1234")
                echo "ยินดีต้อนรับคุณ MEMBER <br>";
            else 
            echo "ฃื่อบัญฃีหรือรหัสผ่านไม่ถูกต้อง <br>";
        ?>
        <a style="text-align: center;"><a href="index.php">กลับไปหน้าหลัก</a></a>
    </div>
</body>

</html>