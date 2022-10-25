<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <form action="calender.php" method="post">
        กรุณากรอกเดือน : <select name="listbox1">
            <option value="list1">1</option>
            <option value="list2">2</option>
            <option value="list3">3</option>
            <option value="list4">4</option>
            <option value="list5">5</option>
            <option value="list6">6</option>
            <option value="list7">7</option>
            <option value="list8">8</option>
            <option value="list9">9</option>
            <option value="list10">10</option>
            <option value="list11">11</option>
            <option value="list12">12</option>
        </select>
        <br>
        กรุณากรอกปี (พ.ศ.) : <input type="number" name="year">
        <br>
        วันที่ 1 ชองเดือนตรงกับ <select name="listbox2">
            <option value="list1">วันจันทร์</option>
            <option value="list2">วันอังคาร</option>
            <option value="list3">วันพุธ</option>
            <option value="list4">วันพฤหัสบดี</option>
            <option value="list5">วันศุกร์</option>
            <option value="list6">วันเสาร์</option>
            <option value="list7">วันอาทิตย์</option>
        </select>
        <br>
        <input type="submit" name="confirm" value="ตกลง">
        <input type="submit" name="cancel" value="ล้างช้อมูล">
        </form>
</body>
</html>