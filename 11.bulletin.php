<?php
    error_reporting(0);
    session_start();

    if (!$_SESSION["id"]) {
        echo "尚未登入，請先登入系統";
        echo "<meta http-equiv='refresh' content='3; url=2.login.html'>";
    }
    else{
        echo "您好，".$_SESSION["id"]." 
        [<a href='12.logout.php'>登出</a>] 
        [<a href='18.user.php'>使用者管理</a>] 
        [<a href='22.bulletin_add_form.php'>新增公告</a>]<br><br>";

        $db = mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
        $sql = mysqli_query($db, "SELECT * FROM bulletin");

        echo "<table border='2'>";
        echo "<tr>
                <td>功能</td>
                <td>編號</td>
                <td>類別</td>
                <td>標題</td>
                <td>內容</td>
                <td>時間</td>
              </tr>";

        while ($item = mysqli_fetch_array($sql)){
            echo "<tr>";
            echo "<td>
                    <a href='26.bulletin_edit_form.php?bid={$item["bid"]}'>編輯</a> 
                    <a href='28.bulletin_delete.php?bid={$item["bid"]}'>刪除</a>
                  </td>";
            echo "<td>".$item["bid"]."</td>";
            echo "<td>".$item["type"]."</td>";
            echo "<td>".$item["title"]."</td>";
            echo "<td>".$item["content"]."</td>";
            echo "<td>".$item["time"]."</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
?>
