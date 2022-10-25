<?php
$Mon = array(" ", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤษจิกายน", "ธันวาคม");
$DDay = array(" ", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์", "อาทิตย์");
$Mo = $_POST['Mo'];
$Ye = $_POST['Ye'];
$d1Mo = $_POST['d1Mo'];
$Hday = 0;
if ($Mo == 1 || $Mo == 3 || $Mo == 5 || $Mo == 7 || $Mo == 8 || $Mo == 10 || $Mo == 12) {
    $Hday = 31;
} else if ($Mo == 2) {
    if (($Ye % 4) == 3) $Hday = 29;
    else $Hday = 28;
} else {
    $Hday = 30;
}

if (isset($_POST['btn_clear'])) {
    header("location:index.php");
    die();
}

$pos = array();
for ($i = 0; $i <= 42; $i++) {
    $pos[$i] = " ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calendar</title>
    <style>
        table,
        th,
        td {
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    เดือน <?php echo $Mon[$Mo] ?> ปี พ.ศ. <?php echo $Ye ?> มี <?php echo $Hday ?> วัน<br>
    วันที่ 1 ของเดือนตรงกับวัน <?php echo $DDay[$d1Mo] ?>

    <?php
    $x = 1;
    $a = $d1Mo;
    for ($a; $x != $Hday + 1; $a++) {
        $pos[$a] = $x++;
    }
    ?>

    <table>
        <tr>
            <th>จ.</th>
            <th>อ.</th>
            <th>พ.</th>
            <th>พฤ.</th>
            <th>ศ.</th>
            <th>ส.</th>
            <th>อา.</th>
        </tr>
        <tr>
            <?php for ($i = 1; $i <= 7; $i++) { ?>
                <td><?php echo $pos[$i] ?><br></td>
            <?php } ?>
        </tr>
        <tr>
            <?php for ($i = 8; $i <= 14; $i++) { ?>
                <td><?php echo $pos[$i] ?><br></td>
            <?php } ?>
        </tr>
        <tr>
            <?php for ($i = 15; $i <= 21; $i++) { ?>
                <td><?php echo $pos[$i] ?><br></td>
            <?php } ?>
        </tr>
        <tr>
            <?php for ($i = 22; $i <= 28; $i++) { ?>
                <td><?php echo $pos[$i] ?><br></td>
            <?php } ?>
        </tr>
        <tr>
            <?php for ($i = 29; $i <= 35; $i++) { ?>
                <td><?php echo $pos[$i] ?><br></td>
            <?php } ?>
        </tr>

        <?php if ($a > 35 && $pos[$i] != " ") { ?>
            <?php echo "<tr>" ?>
            <?php for ($i = 36; $i <= 42; $i++) { ?>
                <?php echo "<td>" ?><?php echo $pos[$i] ?><br><?php echo "</td>" ?>
            <?php } ?>
            <?php echo "</tr>" ?>
        <?php } ?>

    </table>

</body>

</html>