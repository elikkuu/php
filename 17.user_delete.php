<?php
    error_reporting(0);
    session_start();

    if (!$_SESSION["id"]) {
        echo "請先登入會員";
        echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    }
    else{
        $conn=mysqli_connect("120.105.96.90","immust","immustimmust","immust");

        $sql="delete from user where id='{$_GET['id']}'";

        if (mysqli_query($conn,$sql)){
            echo "資料刪除完成，3秒後返回會員管理頁面";
        }
        else{
            echo "資料刪除失敗";
        }

        echo "<meta http-equiv=REFRESH content='3; url=18.user.php'>";
    }
?>
