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
    header("location:index.php");
    die();
?>
<?php } else { ?>

    <body>
        <h1 style="text-align: center;">Webboard KakKak</h1>
        <hr>
        <table style="width: 280px;">
            <tr>
                <td colspan="2" ><b>ผู้ใช้</b> : <?php echo $_SESSION['username'] ?></td>
            </tr>
            <tr>
                <td><b>หมวดหมู่</b> :</td>
                <td><select name="listbox">
                        <option value="list2">เรื่องทั่วไป</option>
                        <option value="list3">เรื่องเรียน</option>
                    </select></td>
            </tr>
            <tr>
                <td><b>หัวข้อ</b> :</td>
                <td><input type="password" name="password" size="20"></td>
            </tr>
            <tr>
                <td><b>เนื้อหา</b> :</td>
                <td><textarea style="height: 50px; width: 180px; max-width: 180px; min-width: 180px;"></textarea></td>
            </tr>
            
            <tr>
                <td></td>
                <td><button>บันทึกข้อความ</button></td>
            </tr>
        </table>
    </body>
<?php } ?>

</html>