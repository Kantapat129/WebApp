<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>

<body>
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr>
    <div align="center">
        ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]; ?><br>
        <?php 
            if($_GET["id"] % 2 == 0) echo "เป็นกระทู้หมายเลขคู่";
            else echo "เป็นกระทู้หมายเลขคี่";
        ?>
    </div><br>
    <table style="border: 2px solid black; width: 40%;" align="center">
            <tr>
                <td colspan="2" style="background-color: #6CD2FE;"><b>แสดงความคิดเห็น</b></td>
            </tr>
            <tr>
                <td><textarea style="width: 98%;"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="ส่งข้อตวาม"></input>
                </td>
            </tr>
        </table>
        <p style="text-align: center;"><a href="index.php">กลับไปหน้าหลัก</a></p>
</body>

</html>