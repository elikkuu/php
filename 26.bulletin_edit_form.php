<?php
    error_reporting(0);
    session_start();

    if (!$_SESSION["id"]) {
        echo "請先登入會員";
        echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    }
    else{

        $conn=mysqli_connect("120.105.96.90","immust","immustimmust","immust");
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET['bid']}");
        $row=mysqli_fetch_array($result);

        $checked1="";
        $checked2="";
        $checked3="";

        if ($row['type']==1)
            $checked1="checked";
        if ($row['type']==2)
            $checked2="checked";
        if ($row['type']==3)
            $checked3="checked";

        echo "
        <html>
            <head><title>編輯公告資料</title></head>
            <body>
                <form method=post action=27.bulletin_edit.php>
                    公告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    公告標題：<input type=text name=title value={$row['title']}><br>
                    公告內容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    公告類別：<input type=radio name=type value=1 {$checked1}>系所公告
                            <input type=radio name=type value=2 {$checked2}>榮譽事蹟
                            <input type=radio name=type value=3 {$checked3}>就業資訊<br>
                    公告日期：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=更新公告> <input type=reset value=重新填寫>
                </form>
            </body>
        </html>
        ";
    }
?>
