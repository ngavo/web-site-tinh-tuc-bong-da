
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
				
					$tam = $_GET['tintuc'];
	
					require ('simple_html_dom.php');
					
					$html = file_get_html($tam);
					
					$wrap = $html->find('div[id=left_calculator]',0);
					
					//lấy phần tử thời gian 
				echo	$time = $wrap->find('div.block_timer_share',0);
					//lấy tiêu đề h1
				echo	$title_h1 = $wrap->find('div.title_news',0);
					//lấy h3
				echo	$title_h3 = $wrap->find('h3[class="short_intro txt_666"]',0);
					//lấy phần tử nội dung
				echo	$content = $wrap->find('div[class="fck_detail width_common block_ads_connect"]',0);
					
					
					
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
