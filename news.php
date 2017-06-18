<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>News - Vietnam Football</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style/style2.css?<?php echo time(); ?>">
<script src="https://use.fontawesome.com/99796656b2.js"></script>
<!--<script src="script/script.js"></script>-->
</head>

<body>
	<div class="wrap">
    	<header>
        	<ul>
            	<li><a href="#">Đăng ký</a></li>
                <li>/</li>
                <li><a href="#">Đăng nhập</a></li>
                <li><i class="fa fa-user-o" aria-hidden="true"></i></li>
            </ul>
            <div class="button-group">
            	<button class="button"><i class="fa fa-facebook" aria-hidden="true"></i></button>
                <button class="button"><i class="fa fa-google-plus" aria-hidden="true"></i></button>
                <button class="button"><i class="fa fa-twitter" aria-hidden="true"></i></button>
            </div>
            <br>
        	<p>Vietnam Football</p>
        </header>
        <nav>
        	<ul>
            	<li><a href="homepage.php">TRANG CHỦ</a></li>
                <li><a href="news.php?xem=http://thethao.vnexpress.net/tin-tuc/bong-da/page/1.html">TIN TỨC</a></li>
                <li><a href="ranking.php">BẢNG XẾP HẠNG</a></li>
                <li><a href="schedule.php">LỊCH THI ĐẤU</a></li>
                <li><a href="broadcast.php">TRỰC TIẾP</a></li>
                <li><a href="comedy.php">GÓC THƯ GIÃN</a></li>
                <input type="search"></input>
                <button class="search-btn"><img src="image/search_icon.png"></img></button>
            </ul>
        </nav>
        <section class="content">
        	 <?php
				
					require ('subnews.php');
					echo '<a href="news.php?xem=http://thethao.vnexpress.net/tin-tuc/bong-da/page/1.html">1</a>';
					echo '<a href="news.php?xem=http://thethao.vnexpress.net/tin-tuc/bong-da/page/2.html">2</a>';
					echo '<a href="news.php?xem=http://thethao.vnexpress.net/tin-tuc/bong-da/page/3.html">3</a>';
					echo '<a href="news.php?xem=http://thethao.vnexpress.net/tin-tuc/bong-da/page/4.html">4</a>';
					echo '<a href="news.php?xem=http://thethao.vnexpress.net/tin-tuc/bong-da/page/5.html">5</a>';
					echo '<a href="news.php?xem=http://thethao.vnexpress.net/tin-tuc/bong-da/page/6.html">6</a>';
					echo '<a href="news.php?xem=http://thethao.vnexpress.net/tin-tuc/bong-da/page/7.html">7</a>';
					echo '<a href="news.php?xem=http://thethao.vnexpress.net/tin-tuc/bong-da/page/8.html">8</a>';
					echo '<a href="news.php?xem=http://thethao.vnexpress.net/tin-tuc/bong-da/page/9.html">9</a>';
					echo '<a href="news.php?xem=http://thethao.vnexpress.net/tin-tuc/bong-da/page/10.html">10</a>';
					
				?>
			
		
        </section>
     
        <footer>
        <p>Copyright &copy 2017 Vietnamfootball.vn All rights reserved.</p>
        <p>The information contained in Vietnamfootball.vn may not be published, broadcast, rewritten, or redistributed without the prior written authority of Vietnamfootball.vn</p>
        </footer>
    </div>
</body>
<script>document.getElementById("default").click();</script>
</html>
