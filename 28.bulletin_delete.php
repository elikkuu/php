<?php
    error_reporting(0);
    session_start();

    if (!$_SESSION["id"]) {
        echo "請先登入會員";
        echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    }
    else{
        $conn=mysqli_connect("120.105.96.90","immust","immustimmust","immust");

        $sql="delete from bulletin where bid='{$_GET['bid']}'";

        if (!mysqli_query($conn,$sql)){
            echo "公告資料刪除失敗";
        }
        else{
            echo "公告資料刪除完成，3秒後返回公告列表";
        }

        echo "<meta http-equiv=REFRESH content='3; url=11.bulletin.php'>";
    }
?>
