<?php

    error_reporting(0);
    session_start();

    if (!$_SESSION["id"]) {
        echo "請先登入會員";
        echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    }
    else{
        $conn=mysqli_connect("120.105.96.90","immust","immustimmust","immust");

        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            echo "公告資料更新失敗";
            echo "<meta http-equiv=REFRESH content='3; url=11.bulletin.php'>";
        }
        else{
            echo "公告資料更新完成，3秒後返回公告列表";
            echo "<meta http-equiv=REFRESH content='3; url=11.bulletin.php'>";
        }
    }

?>
