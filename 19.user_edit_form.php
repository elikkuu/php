<html>
    <head><title>編輯會員資料</title></head>
    <body>
    <?php
    error_reporting(0);
    session_start();

```
if (!$_SESSION["id"]) {
    echo "請先登入會員";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
}
else{
    $conn=mysqli_connect("120.105.96.90","immust","immustimmust","immust");
    $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
    $row=mysqli_fetch_array($result);

    echo "
    <form method=post action=20.user_edit.php>
        <input type=hidden name=id value={$row['id']}>
        會員帳號：{$row['id']}<br>
        會員密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
        <input type=submit value=更新資料>
    </form>
    ";
}
?>
</body>
```

</html>
