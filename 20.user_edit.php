<?php

    error_reporting(0);
    session_start();

    if (!$_SESSION["id"]) {
        echo "請先登入會員";
        echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    }
    else{
        $conn=mysqli_connect("120.105.96.90","immust","immustimmust","immust");

        if (!mysqli_query($conn,"update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
            echo "資料更新失敗";
            echo "<meta http-equiv=REFRESH content='3; url=18.user.php'>";
        }
        else{
            echo "資料更新完成，3秒後返回會員管理頁面";
            echo "<meta http-equiv=REFRESH content='3; url=18.user.php'>";
        }
    }

?>
