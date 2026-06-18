<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="utf-8">
    <title>呵呵哈哈資管系</title>
    <!-- 引入 Bootstrap 與 Flexslider 相關資源 (請確保路徑正確) -->
    <link href="https://bootcss.com" rel="stylesheet">
    <script src="https://bootcss.com"></script>       
    <script>
        $(window).load(function() {
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
        }
        /* top */
        .top{
             background-color: white;
        }
        .top .container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding:10px;
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
        }
        /* nav */
        .nav {
            background-color:#333;
            display: flex;
            justify-content: center;
        }
        .nav ul {
            list-style-type: none;  
            margin: 0; 
            padding: 0; 
            overflow: visible; 
            background-color: #333; 
        }
        .nav li {
            float: left; 
        }
        .nav li a {    
            display: block;  
            color: white;  
            text-align: center;  
            padding: 14px 16px;  
            text-decoration: none;  
        }
        .nav li a:hover {
            background-color: #111; 
        }
        /*下拉式選單*/
        .dropdown:hover .dropdown-content {
            display: block;   
        }
        li.dropdown:hover{
            background-color: #333;  
        }
        .dropdown-content {  
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            z-index: 999; 
        }
        .dropdown-content a {
            color: white; 
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* slider */
        .slider{
            background-color: black;
        }
        /* banner*/
        .banner{
            background-image: linear-gradient(#ABDCFF,#0396FF);
            padding:30px;
        }
        .banner h1{
            padding: 20px;
        }        
        /*faculty*/
        .faculty {
            display: block;
            justify-content: center;
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
        }
        .faculty .teacher{
            display:block;
            text-decoration: none;
        }
        .faculty .teacher img{
            height: 200px;
            width: 200px;
        }
        .faculty .teacher h3{
            color: White;
            background-color: rgba(39,40,40,0.5);
            text-align: center;           
        }
        /*contact*/
        .contact {
            display: block;
            justify-content: center;
            margin-top: 30px;
            margin-bottom: 30px;                
        }
        .contact h2{
            color: rgb(54, 82, 110);
            font-size: 25px;
        }
        .contact .infos{
            display:flex;
            margin-top: 30px; 
            justify-content: center;
        }
        .contact .infos .left{
            display:block;
            text-align: left;
            margin-right: 30px;
        }
        .contact .infos .left b{
            display:block;
            text-align: left;
            margin-top: 10px;
            font-weight: bold;
            color: Gray;
            font-size: 18px;
            line-height: 18px;
        }
        .contact .infos .left span{
            display:block;
            text-align: left;
            margin-top: 10px;
            color: rgba(39,40,34,0.5);
            font-size: 16px;
            padding-left: 27px;
        }
        .contact .infos .right{
            height: 200px;               
        }
        .contact .infos .right iframe{
            width: 100%;
            height: 100%;
            border: 1px solid rgba(39,40,34,0.50);
        }
        /*footer*/
        .footer{
            display: flex;
            justify-content: center;
            background-color: rgb(25,26,30);
            padding: 30px 0;
        }
        /*登入畫面css*/
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1000; 
            right: 50px;
            top: 50px;
            width: 20%; 
            height: 20%; 
            overflow: auto; 
            background-color: rgba(255,255,255,0.9); 
            padding-top: 50px;
        }  
        /*佈告欄*/
        .bulletin{
            display: block;
            justify-content: center;
            background-color: rgb(255,204,153);
            padding: 30px 0;
        }
        .bulletin h1{
            padding:10px;
        }
        .bulletin table{
            border-collapse:collapse;
            font-family: 微軟正黑體;
            font-size:16px; 
            border:1px solid #000;
            margin: 0 auto; 
        }
        .bulletin table th{
            background-color: #abdcff;
            color: #ffffff;
            padding: 5px 10px;
        }
        .bulletin table td{
            background-color: #ffffff;
            color: #0396ff;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <div class="top">
        <div class="container">
            <div class="logo">
              <img src="https://github.com" alt="Logo">
              呵呵哈哈資管系
            </div>
            <div class="top-nav">
              <a href="#">呵呵哈哈</a>
              <a href="#">管理學院</a>
              <label onclick="document.getElementById('login').style.display='block'" style="cursor:pointer;">登入</label>
              <div id="login" class="modal">
                <span onclick="document.getElementById('login').style.display='none'" style="cursor:pointer;">&times; 管理系統登入</span>
                <form method="post" action="10.login.php">
                    帳號：<input type="text" name="id"><br>
                    密碼：<input type="password" name="pwd"><p></p>
                    <input type="submit" value="登入"> <input type="reset" value="清除">
                </form>
              </div>  
            </div>
          </div>
    </div>
    <div class="nav">   
        <ul>
            <li><a href="#home">首頁</a></li>
            <li><a href="#introduction">系所簡介</a></li>
            <li class="dropdown"><a href="#faculty">成員簡介</a>
                <div class="dropdown-content">
                    <a href="#faculty">陳小美</a>
                    <a href="#faculty">林臨安</a>
                    <a href="#faculty">張藝文</a>
                </div>                       
            </li>
            <li><a href="#about">相關資訊</a></li>
        </ul>
    </div>
    
    <!-- 輪播圖區塊 -->
    <div class="slider">
        <div class="flexslider">
            <ul class="slides">
                <li><img src="https://picsum.photos" alt="slide1"></li>
                <li><img src="https://picsum.photos" alt="slide2"></li>
            </ul>
        </div>
    </div>
</body>
</html>
