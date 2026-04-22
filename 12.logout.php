<?php
    session_start();

    unset($_SESSION["id"]);

    echo "您已成功登出，系統將返回登入頁面...";
    echo "<meta http-equiv='refresh' content='3; url=2.login.html'>";
?>
