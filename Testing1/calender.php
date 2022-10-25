<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calender</title>
    <style>
        table, th, td{
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php 
        $month = $_POST["listbox1"];
        $DinM = 0;
        $day = $_POST["listbox2"];
        $dayc = 0;
        $count = 1;
    ?>
    เดือน 
    <?php switch($month){
        case "list1": echo "มกราคม"; $DinM = 31; break;
        case "list2": echo "กุมภาพันธ์"; if($_POST["year"] % 4 == 3)$DinM = 29; else $DinM = 28; break;
        case "list3": echo "มีนาคม"; $DinM = 31; break;
        case "list4": echo "เมษายน"; $DinM = 30; break;
        case "list5": echo "พฤษภาคม"; $DinM = 31; break;
        case "list6": echo "มิถุนายน"; $DinM = 30; break;
        case "list7": echo "กรกฎาคม"; $DinM = 31; break;
        case "list8": echo "สิงหาคม"; $DinM = 31; break;
        case "list9": echo "กันยายน"; $DinM = 30; break;
        case "list10": echo "ตุลาคม"; $DinM = 31; break;
        case "list11": echo "พฤษจิกายน"; $DinM = 30; break;
        case "list12": echo "ธันวาคม"; $DinM = 31; break;
        default : echo "error month";
    } ?>
    ปี พ.ศ. <?php echo $_POST["year"] ?>
    มี <?php echo $DinM ?> วัน
    <br>
    วันที่ 1 ของเดือนตรงกับวัน 
    <?php switch($day){
        case "list1": echo "จันทร์"; $dayc = 1; break;
        case "list2": echo "อังคาร"; $dayc = 2; break;
        case "list3": echo "พุธ"; $dayc = 3; break;
        case "list4": echo "พฤหัสบดี"; $dayc = 4; break;
        case "list5": echo "ศุกร์"; $dayc = 5; break;
        case "list6": echo "เสาร์"; $dayc = 6; break;
        case "list7": echo "อาทิตย์"; $dayc = 7; break;
        default : echo "error day";
    } ?>
    <table>
        <tr><th>จ.</th><th>อ.</th><th>พ.</th><th>พฤ.</th><th>ศ.</th><th>ส.</th><th>อา.</th></tr>
        <?php 
        for($i = 1; $i <= 7; $i++){
            if($i < $dayc) echo "<td></td>";
            else {
                echo "<td>$count</td>";
                $count++;
            }
        }
        echo "<tr></tr>";
        for($i = 1; $i < $DinM+$dayc-7; $i++){
                echo "<td>$count</td>";
                $count++;
                if($i % 7 == 0) echo "<tr></tr>";
            
        }
        for($i = $dayc; $i < 7; $i++){
            echo "<td></td>";
        }
        ?>

    </table>
</body>
</html>