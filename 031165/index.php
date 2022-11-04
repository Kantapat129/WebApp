<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>home</title>
    <script>
        function myFunction(){
            let r=confirm("ต้องการจะลบจริงหรือไม่");
            return r;
        }
        function retext(){

        }
    </script>
</head>

<?php
if (!isset($_SESSION['id'])) {
    $txt='--ทั้งหมด--';
?>

    <body>
        <div class="container">
            <h1 style="text-align: center;">Webboard KakKak</h1>
            <?php include "nav.php"; ?>
            <br>
            <div class="d-flex">
                <div>
                    <label>หมวดหมู่ :</label>
                    <span class="dropdown">
                        <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="dropdown2" data-bs-toggle="dropdown" aria-expanded="false">--ทั้งหมด--</button>
                        <ul class="dropdown-menu" aria-labelledby="dropdown2">
                            <?php  
                                $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                                $sql = "SELECT * FROM category";
                                foreach($conn->query($sql) as $row){
                                    echo "<li ><a href='#' class='dropdown-item'>".$row['name']."</a></li>";
                                }
                                $conn = null;
                            ?>
                        </ul>
                    </span>
                </div>
            </div>
            <br>
            <table class="table table-striped">
                <?php 
                    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                    $sql="SELECT t3.name,t1.id,t1.title,t2.login,t1.post_date FROM post as t1
                        INNER JOIN user as t2 ON (t1.user_id=t2.id) INNER JOIN category as t3 ON
                        (t1.cat_id=t3.id) ORDER BY t1.post_date DESC";
                    $result=$conn->query($sql);
                    while($row=$result->fetch()){
                        echo "<tr><td>[ $row[0] ] <a style=text-decoration:none href=post.php?id=$row[1]>$row[2]</a><br>
                        $row[3] - $row[4]</td></tr>";
                    }
                    $conn=null;
                ?> 
            </table>
        </div>
    </body>
<?php } else { ?>

    <body>
        <div class="container">
            <h1 style="text-align: center;">Webboard KakKak</h1>
            <?php include "nav.php"; ?>
            <br>
            <div class="d-flex justify-content-between">
                <div>
                    <label>หมวดหมู่ :</label>
                    <span class="dropdown">
                        <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="dropdown2" data-bs-toggle="dropdown" aria-expanded="false">--ทั้งหมด--</button>
                        <ul class="dropdown-menu" aria-labelledby="dropdown2">
                            <?php  
                                $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                                $sql = "SELECT * FROM category";
                                foreach($conn->query($sql) as $row){
                                    echo "<li ><a href='#' class='dropdown-item'>".$row['name']."</a></li>";
                                }
                                $conn = null;
                            ?>
                        </ul>
                    </span>
                </div>
                <div><a href="newpost.php" class="btn btn-success btn-sm"><i class="bi bi-plus"></i> สร้างกระทู้ใหม่</a></div>
            </div>
            <br>
            <table class="table table-striped">
                <?php
                    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                    $sql="SELECT t3.name,t1.id,t1.title,t2.login,t1.post_date FROM post as t1
                        INNER JOIN user as t2 ON (t1.user_id=t2.id) INNER JOIN category as t3 ON
                        (t1.cat_id=t3.id) ORDER BY t1.post_date DESC";
                    $result=$conn->query($sql);
                    while($row=$result->fetch()){
                        echo "<tr><td>[ $row[0] ] <a style=text-decoration:none href=post.php?id=$row[1]>$row[2]</a><br>
                        $row[3] - $row[4]</td>";
                        if($_SESSION["role"]=="a"){
                            echo "<td><a class='btn btn-danger btn-sm' onclick='return myFunction();'><i class='bi bi-trash'></i></a></td>";
                        }
                        echo "</tr>";
                    }
                    $conn=null;
                ?> 
            </table>
        </div>
    </body>
<?php } ?>
<!-- href=delete.php?id=$i -->
</html>
