<html>
    <head><title>會員帳號建立</title></head>
    <body>
<?php        
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請先登入系統";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{    
        echo "
            <form action=15.user_add.php method=post>
                使用者：<input type=text name=id><br>
                登入密碼：<input type=text name=pwd><p></p>
                <input type=submit value=送出> <input type=reset value=重填>
            </form>
        ";
    }
?>
    </body>
</html>
