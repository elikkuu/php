<?php
   # 連接資料庫
   $link = mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");

   # 執行查詢
   $res = mysqli_query($link, "SELECT * FROM user");

   # 設定登入判斷初始值
   $isLogin = FALSE;

   # 逐筆比對帳號密碼
   while ($data = mysqli_fetch_array($res)) {
     if (($_POST["id"] == $data["id"]) && ($_POST["pwd"] == $data["pwd"])) {
       $isLogin = TRUE;
     }
   }

   # 判斷登入結果
   if ($isLogin) {
     session_start();
     $_SESSION["id"] = $_POST["id"];

     echo "登入成功，頁面即將跳轉...";
     echo "<meta http-equiv='refresh' content='3; url=11.bulletin.php'>";
   } else {
     echo "登入失敗，請重新輸入";
     echo "<meta http-equiv='refresh' content='3; url=2.login.html'>";
   }
?>
