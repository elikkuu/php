<html>
    <head><title>會員管理</title></head>
    <body>
    <?php
        error_reporting(0);
        session_start();

        if (!$_SESSION["id"]) {
            echo "請先登入系統";
            echo "<meta http-equiv='refresh' content='3; url=2.login.html'>";
        }
        else{   
            echo "<h1>會員管理</h1>
                [<a href='14.user_add_form.php'>新增會員</a>] 
                [<a href='11.bulletin.php'>返回公告</a>]<br>
                <table border=1>
                    <tr><td>功能</td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
            $result=mysqli_query($conn, "select * from user");

            while ($row=mysqli_fetch_array($result)){
                echo "<tr>
                        <td>
                        <a href='19.user_edit_form.php?id={$row['id']}'>編輯</a> |
                        <a href='17.user_delete.php?id={$row['id']}'>刪除</a>
                        </td>
                        <td>{$row['id']}</td>
                        <td>{$row['pwd']}</td>
                      </tr>";
            }

            echo "</table>";
        }
    ?> 
    </body>
</html>
