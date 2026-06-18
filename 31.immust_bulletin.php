<html>
    <head><title>呵呵哈哈資管系</title></title>
    <meta charset="utf-8">
    <link href="https://bootcss.com" rel="stylesheet">
    <script src="https://bootcss.com"></script>
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
            /*border:1px solid red;*/
            font-size: 35px;
            font-weight: bold;
        }
        .top .logo img{
            width: 100px;
            vertical-align: middle;
        }
        .top .top-nav{
            /*border:1px solid red;*/
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
            overflow: visible; /* 修正：若為hidden下拉選單會被切掉 */
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
            display: block;   /*使用block呈現上下排列*/
        }
        li.dropdown:hover{
            background-color: #333;  /*設定背景顏色*/
        }
        .dropdown-content {  /*設定下拉選單內容格式*/
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            z-index: 999; /* 修正：提高層級避免被輪播圖遮擋 */
        }
        .dropdown-content a {/*設定下拉選單連結內容格式*/
            color: white; /* 修正：原為black會導致黑底黑字看不到 */
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
            /*border:1px solid red;*/
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .faculty .teacher{
            /*border:1px solid blue;*/
            display:block;
            text-decoration: none;
        }
        .faculty .teacher img{
            height: 200px;
            width: 200px;
        }
        .faculty .teacher h3{
            color: White;
            background-color: rgba(39,40,34,.500);
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
            text-decoration: bold;
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
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1000; /* 修正：提高層級 */
            right: 50px;
            top: 50px;
            width: 20%; /* Full width */
            height: 20%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(255,255,255,0.9); /* Black w/ opacity */
            padding-top: 50px;
        }  /*登入畫面css*/
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
            margin: 0 auto; /* 新增：讓表格在區塊中置中 */
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
                  <img src="https://github.com">
                  呵呵哈哈資管系
                </div>
                <div class="top-nav">
                  <a href="#">呵呵哈哈</a>
                  <a href="#">管理學院</a>
                  <!---跳出登入畫面-->
                  <label onclick="document.getElementById('login').style.display='block'" style="cursor:pointer;">登入</label>
                  <div id="login" class="modal">
                    <span onclick="document.getElementById('login').style.display='none'" style="cursor:pointer;">&times; 管理系統登入</span>
                    <form method=post action="10.login.php">
                        帳號：<input type=text name="id"><br />
                        密碼：<input type=password name="pwd"><p></p>
                        <input type=submit value="登入"> <input type=reset value="清除">
                    </form>
                  </div>  
                  <!---登入畫面-->
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
                    <li><img src="https://github.com"></li>
                    <li><img src="https://github.com"></li>
                </ul>
            </div>
        </div>

        <!-- 佈告欄區塊 -->
        <div class="bulletin">
            <h1>最新消息</h1>
            <table>
                <tr><th>日期</th><th>公告主題</th></tr>
                <tr><td>2026-06-18</td><td>資管系證照開始報名</td></tr>
            </table>
        </div>

        <!-- 成員簡介區塊 -->
        <div class="faculty" id="faculty">
            <h2>成員簡介</h2>
            <div class="container">
                <a href="#" class="teacher">
                    <img src="https://github.com">
                    <h3>陳小美</h3>
                </a>
                <a href="#" class="teacher">
                    <img src="https://github.com">
                    <h3>林臨安</h3>
                </a>
                <a href="#" class="teacher">
                    <img src="https://github.com">
                    <h3>張藝文</h3>
                </a>
            </div>
        </div>

        <!-- 聯絡資訊區塊 -->
        <div class="contact">
            <h2>聯絡我們</h2>
            <div class="infos">
                <div class="left">
                    <b>學校地址</b><span>搭拉拉市哇哈哈路27段</span>
                    <b>聯絡電話</b><span>190831123333</span>
                </div>
                <div class="right">
