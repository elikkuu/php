<?php

error_reporting(0);
session_start();

if (!$_SESSION["id"]) {
    echo "請先登入會員";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
}
else{

   #連接資料庫
   $conn=mysqli_connect("120.105.96.90","immust","immustimmust","immust");

   #新增會員資料
   $sql="insert into user(id,pwd) values ('{$_POST['id']}','{$_POST['pwd']}')";

   if(mysqli_query($conn,$sql)){
      echo "資料新增完成，3秒後返回會員管理頁面";
      echo "<meta http-equiv=REFRESH content='3; url=18.user.php'>";
   }
   else{
      echo "資料新增失敗";
   }
}
?>
