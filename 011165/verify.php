<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
    $u=$_POST['login'];
    $p=$_POST['pass'];
    $conn = new PDO("mysql:host=localhost;dbname=webboard;chaset=utf8", "root", "");
    $sql = "SELECT * FROM user where login='$u' and password=sha1('$p')";
    $result=$conn->query($sql);
    if ($result->rowCount()==1) {
        $data=$result->fetch(PDO::FETCH_ASSOC);
        $_SESSION["username"] = $data["login"];
        $_SESSION["role"] = $data["role"];
        $_SESSION["user_id"] = $data["id"];
        $_SESSION["id"] = session_id();
        header("location:index.php");
        die();
    } else {
        $_SESSION["error"]=1;
        header("location:login.php");
        die();
    }
?>