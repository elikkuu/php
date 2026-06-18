<?php
    error_reporting(0);
    session_start();

    if (!$_SESSION["id"]) {
        echo "請先登入會員";
        echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    }
    else{
        echo "
        <html>
            <head><title>新增公告資料</title></head>
            <body>
                <form method=post action=23.bulletin_add.php>
                    公告標題：<input type=text name=title><br>
                    公告內容：<br><textarea name=content rows=20 cols=20></textarea><br>
                    公告類別：<input type=radio name=type value=1>系所公告
                            <input type=radio name=type value=2>榮譽事蹟
                            <input type=radio name=type value=3>就業資訊<br>
                    公告日期：<input type=date name=time><p></p>
                    <input type=submit value=送出公告> <input type=reset value=重新填寫>
                </form>
            </body>
        </html>
        ";
    }
?>
