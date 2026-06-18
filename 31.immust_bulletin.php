<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <title>點點點大學資訊管理系</title>
    <meta charset="utf-8">

    <!-- 更新：引入穩定且標準的線上 jQuery 與 Flexslider 資源 -->
    <link rel="stylesheet" href="https://cloudflare.com">
    <script src="https://cloudflare.com"></script>
    <script src="https://cloudflare.com"></script>

    <script>
        // 更新：使用新版 jQuery 推薦的載入寫法，確保輪播圖正常啟動
        $(window).on('load', function() {
            $('.flexslider').flexslider({
                animation: "slide",
                rtl: true
            });
        });
    </script>

    <style>
        *{
            margin:0;
            color:gray;
            text-align:center;
            box-sizing: border-box; /* 增加：防止元素邊框撐開排版 */
        }
        .top{
            background-color: white;
        }
        .top .container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding:10px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .top .logo{
            font-size: 35px;
            font-weight: bold;
        }
        .top .logo img{
            width: 100px;
            vertical-align: middle;
        }
        .top .top-nav{
            font-size: 25px;
            font-weight: bold;
        }
        .top .top-nav a{
            text-decoration: none;
            margin-left: 15px; /* 增加：讓頂部連結有些許間距 */
        }
        .nav {
            background-color:#333;
            display: flex;
            justify-content: center;
        }
        .nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        .nav li {
            float: left;
            position: relative; /* 增加：使下拉選單能精準定位在按鈕下方 */
        }
        .nav li a {
            display: block;
            color: white;
            padding: 14px 16px;
            text-decoration: none;
        }
        .nav li a:hover {
            background-color: #111;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            z-index: 10; /* 更新：提高層級，防止選單被輪播圖遮擋 */
        }
        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            display: block;
            text-align: left;
            text-decoration: none;
        }

        /* ===== Slider 修正 ===== */
        .slider{
            background-color: black;
            height: 320px;
            overflow: hidden;
        }
        .flexslider,
        .flexslider .slides,
        .flexslider .slides li{
            height: 100%;
        }
        .flexslider img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .banner{
            background-image: linear-gradient(#ABDCFF,#0396FF);
            padding:30px;
        }
        .banner h1{
            padding: 20px;
            color: white; /* 更新：漸層背景上的文字改為白色以清晰閱讀 */
        }
        .faculty {
            background-color:white;
            padding:40px;
        }
        .faculty h2 {
            font-size: 25px;
            color: rgb(50,51,52);
            padding-bottom:40px;
        }
        .faculty .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        .faculty .teacher{
            display:block;
            text-decoration: none;
        }
        .faculty .teacher img{
            height: 200px;
            width: 200px;
            object-fit: cover;
        }
        .faculty .teacher h3{
            color: white;
            background-color: rgba(39,40,34,.5);
            margin-top: 5px;
            padding: 5px 0;
        }
        .contact {
            display: flex;
            justify-content: center;
            margin: 30px 0;
        }
        .contact .container h2{
            color: rgb(54, 82, 110);
            font-size: 25px;
        }
        .infos{
            display:flex;
            margin-top: 30px;
            align-items: center;
        }
        .left{
            text-align: left;
            margin-right: 30px;
        }
        .left b{
            display:block;
            margin-top: 10px;
            font-size: 18px;
        }
        .left span{
            display:block;
            margin-top: 10px;
            padding-left: 27px;
        }
        iframe{
            width: 300px;
            height: 200px;
            border: none;
        }
        .footer{
            background-color: rgb(25,26,30);
            color:white;
            padding: 30px 0;
        }

        /* 布告欄與登入視窗樣式 */
        .bulletin{
            background-color: rgb(255,204,153);
            padding: 30px 0;
        }
        .bulletin table{
            border-collapse:collapse;
            font-family: 微軟正黑體;
            font-size:16px; 
            border:1px solid #000;
            margin: 0 auto; 
            width: 60%;
            max-width: 600px;
        }
        .bulletin table th{
            background-color: #abdcff;
            color: #ffffff;
            padding: 8px 12px;
        }
        .bulletin table td{
            background-color: #ffffff;
            color: #0396ff;
            padding: 8px 12px;
        }
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1000; 
            right: 50px;
            top: 60px; /* 更新：微調往下避開導覽列 */
            width: 250px; 
            height: auto; 
            background-color: rgba(255,255,255,0.95); 
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15); /* 增加：視窗陰影質感 */
        }
    </style>
</head>

<body>
    <div class="top">
        <div class="logo">
            <img src="https://github.com">
            點點點大學資訊管理系
        </div>
        <div class="top-nav">
            <a href="#">點點點科大</a>
            <a href="#">管理學院</a>
            <!-- 整合舊版內容：點擊可觸發彈出視窗的登入連結 -->
            <a href="#" onclick="document.getElementById('login').style.display='block'; return false;">登入</a>
            
            <!-- 整合舊版內容：後端管理系統登入視窗表單 -->
            <div id="login" class="modal">
                <span onclick="document.getElementById('login').style.display='none'" style="cursor:pointer; float:right; font-weight:bold; color:black;">&times;</span>
                <p style="font-weight:bold; margin-bottom:10px; color:black;">管理系統登入</p>
                <form method="post" action="10.login.php">
                    <span style="color:black;">帳號：</span><input type="text" name="id" style="margin-bottom:5px; width:120px;"><br />
                    <span style="color:black;">密碼：</span><input type="password" name="pwd" style="margin-bottom:10px; width:120px;"><br />
                    <input type="submit" value="登入"> <input type="reset" value="清除">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="nav">
    <ul>
        <li><a href="#">首頁</a></li>
        <li><a href="#introduction">系所簡介</a></li>

        <li class="dropdown">
            <a href="#faculty">成員簡介</a>
            <div class="dropdown-content">
                ...
            </div>
        </li>
    </ul>
</div>
<div class="bulletin">
           <h1>最新公告</h1>
            <?php
                $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
                $result=mysqli_query($conn, "select * from bulletin");
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";
                while ($row=mysqli_fetch_array($result)){
                    echo "<tr><td>";
                    echo $row["bid"];
                    echo "</td><td>";
                    if ($row["type"]==1) echo "系上公告";  
                    if ($row["type"]==2) echo "獲獎資訊"; 
                    if ($row["type"]==3) echo "證照資訊"; 
                    echo "</td><td>"; 
                    echo $row["title"];
                    echo "</td><td>";
                    echo $row["content"]; 
                    echo "</td><td>";
                    echo $row["time"];
                    echo "</td></tr>";
                }
                echo "</table>";
            ?>
        </div>


<!-- 整合舊版內容：最新消息布告欄表格區塊 -->
<div class="bulletin">
    <h1>最新消息</h1>
    <table>
        <thead>
            <tr><th>日期</th><th>公告主題</th></tr>
        </thead>
        <tbody>
            <tr><td>2026-06-18</td><td>資管系證照開始報名</td></tr>
        </tbody>
    </table>
</div>

<div class="faculty" id="faculty">
    <h2>師資介紹</h2>
    <div class="container">
        <a class="teacher" href="#faculty">
            <img src="faculty1.jpg" alt="艾利">
            <h3>陳家家</h3>
        </a>
        <a class="teacher" href="#faculty">
            <img src="faculty2.jpg" alt="莫妮卡">
            <h3>莫卡卡</h3>
        </a>
        <a class="teacher" href="#faculty">
            <img src="faculty3.jpg" alt="小雛">
            <h3>小中大</h3>
        </a>
    </div>
</div>

<div class="contact" id="about">
    <div class="container">
        <h2>相關資訊</h2>
        <div class="infos">
            <div class="left">
                <b>點點點大學管理學院6樓</b>
                <span> 挖搭發呼阿由277號</span>
                <b>電話：1809318095</b>
                <span>分機：1111、2222、5555</span>
                    </div>                
                </div>
        </div>
        <div class="footer">
            &copy;Copyright 2000 Department of Information Management, MUST. All rights reserved.
        </div>
     </body>
</html>
