<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Homepage - Vietnam Football</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style/style1.css?<?php echo time() ?>">
<script src="script/script1.js"></script>
<script src="https://use.fontawesome.com/99796656b2.js"></script>

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
        <?php
			require('simple_html_dom.php');
			$html = file_get_html('http://thethao.vnexpress.net/tin-tuc/bong-da/page/1.html');
			
			//lấy html của trang tin tức thể thao
					$tins = $html->find('ul[id=news_home] li');
					
					$add_array = array();//khởi tạo mảng để thêm các trang phù hợp vào mảng
					foreach ($tins as $t)
					{
				
						//kiem tra head_h3 có phải là tin tức không
						$a = $t->find('h3.title_news a');//lấy thẻ a
						for($i=0;$i<count($a);$i++)
						{
							$ref = $a[$i]->href;
							$exp_array =  explode("/",$ref);//lấy  url thẻ a và cắt thành mảng
							if($exp_array[3]=="tin-tuc" && !strlen(strstr($ref,"#box_comment"))>0)
							{
								array_push($add_array,$t);
							}
						}
						
						
					}
					
					$img_1 = $add_array[0]->find('div.thumb img',0)->getAttribute('src');
					$href_1 = $add_array[0]->find('h3.title_news a',0)->getAttribute('href');
					$title_1 = $add_array[0]->find('h3.title_news a',0)->getAttribute('title');
					$h3_1 = $add_array[0]->find('h3.title_news a',0)->innerText();
					
					$img_2 = $add_array[1]->find('div.thumb img',0)->getAttribute('src');
					$href_2 = $add_array[1]->find('h3.title_news a',0)->getAttribute('href');
					$title_2 = $add_array[1]->find('h3.title_news a',0)->getAttribute('title');
					$h3_2 = $add_array[1]->find('h3.title_news a',0)->innerText();
					
					$img_3 = $add_array[2]->find('div.thumb img',0)->getAttribute('src');
					$href_3 = $add_array[2]->find('h3.title_news a',0)->getAttribute('href');
					$title_3 = $add_array[2]->find('h3.title_news a',0)->getAttribute('title');
					$h3_3 = $add_array[2]->find('h3.title_news a',0)->innerText();
					
					$img_4 = $add_array[3]->find('div.thumb img',0)->getAttribute('src');
					$href_4 = $add_array[3]->find('h3.title_news a',0)->getAttribute('href');
					$title_4= $add_array[3]->find('h3.title_news a',0)->getAttribute('title');
					$h3_4 = $add_array[3]->find('h3.title_news a',0)->innerText();
					
					$img_5 = $add_array[4]->find('div.thumb img',0)->getAttribute('src');
					$href_5 = $add_array[4]->find('h3.title_news a',0)->getAttribute('href');
					$title_5 = $add_array[4]->find('h3.title_news a',0)->getAttribute('title');
						
		?>
        <section class="lastest">
        	<div class="flex-hot-news">
               <div  style="float:right;"> 
             	<a href="chitiet.php?tintuc=<?php echo $href_1 ?>" title="<?php echo $title_1 ?>"> <img class="flex-item"  src="<?php echo $img_1 ?>"></img></a>
                </div>
            
            	<div class="flex-item" style="float:right; clear:left">
                   <a href="chitiet.php?tintuc=<?php echo $href_2 ?>" title="<?php echo $title_2 ?>"> <img id="one" class="sub-img" src="<?php echo $img_2 ?>"></img></a>
                   <a href="chitiet.php?tintuc=<?php echo $href_3 ?>" title="<?php echo $title_3 ?>">  <img id="two" class="sub-img" src="<?php echo $img_3 ?>"></img></a>
                   <a href="chitiet.php?tintuc=<?php echo $href_4 ?>" title="<?php echo $title_4 ?>"> <img id="three" class="sub-img" src="<?php echo $img_4 ?>"></img></a>
                   <a href="chitiet.php?tintuc=<?php echo $href_5 ?>" title="<?php echo $title_5 ?>"> <img id="four" class="sub-img" src="<?php echo $img_5 ?>"></img></a>
            	</div>
            </div>
            <p><a href="news.php?xem=http://thethao.vnexpress.net/tin-tuc/bong-da/page/1.html"><strong>Xem thêm >></strong></a></p>
        </section>
        <div class="content">
        	<section class="highlight">
            	<p id="title" class="title1"><strong>HIGHLIGHT CỦA NGÀY</strong></p>
                <div id="video1">
                	<video width="430" controls> <source src="video/Passion - Beethoven.mp4">Your browser does not support HTML5 video</video>
                </div>
                
                <h2>Hải Phòng 2-0 Quảng Nam</h2>
                <p class="detail">Thi đấu trên sân Lạch Tray không có khán giả, nhưng thầy trò HLV Trương Việt Hoàng vẫn giành chiến thắng ở vòng tám giải V-League 2017</p>
            </section>
            <section class="match" style="float:right">
            	<p id="title" class="title2"><strong>GIẢI ĐẤU</strong></p>
                <div class="tab" style="text-align:center;">
                	 <div class="lichthidau" style=" float:left; width:149px; height:200px; background-color:#CCC; text-align:center;">
                	  <button class="tablinks" style="margin-bottom:10px; margin-left:25px" onClick="openTab(event, 'schedule')" id="default" ><strong>Lịch thi đấu</strong></button>
                      	<p><a href="schedule_laLigaIcon.php" style="text-decoration:none;"> LaLiga </a></p>
                        <p><a href="schedule_championLeagueIcon.php" style="text-decoration:none;"> champion League </a></p>
                        <p><a href="schedule_vLeagueIcon.php" style="text-decoration:none;"> vLeague </a></p>
                        <p><a href="schedule.php" style="text-decoration:none;"> Ngoại Hạng Anh </a></p>
                       </div>
                     <div class="bangxephang" style=" float:right;  width:149px; height:200px; background-color:#CCC; text-align:center">
                    <button class="tablinks" style="margin-bottom:10px; margin-left:20px" onClick="openTab(event, 'rank')"><strong>Bảng xếp hạng</strong></button>
                    	<p><a href="laLigaIcon.php" style="text-decoration:none;"> LaLiga </a></p>
                        <p><a href="championLeagueIcon.php" style="text-decoration:none;"> champion League </a></p>
                        <p><a href="vLeagueIcon.php" style="text-decoration:none;"> vLeague </a></p>
                        <p><a href="bangxephangAnh.php" style="text-decoration:none;"> Ngoại Hạng Anh </a></p>
                      </div>
                     </div>
            </section>
  
            <section class="comedy" style="margin-top:40px;">
            	<p id="title" class="title3"><strong>GÓC THƯ GIÃN</strong></p>
                <img id="imgComedy" src="image/andrea-pirlo-gia-tu-su-nghiep-thi-dau-quoc-te.jpg"/>
                <img id="imgComedy" src="image/barca-doi-bong-manh-nhat-the-gioi-hien-tai.jpg"/>
                <img id="imgComedy" src="image/hinh-che-bong-da-hai-huoc-5.jpg"/>
                <p id="detail"><a href="comedy.php"><strong>Xem thêm >></strong></a></p>
            </section>
            <section class="broadcast" style="margin-top:40px; margin-bottom:40px;">
            	<p id="title" class="title3"><strong>LINK XEM TRỰC TIẾP</strong></p>
                
                <div class="flex-container">
                	<ul class="flex-item-1">
                        <li><a href="http://tructiepbongda.com/link-xem-bong-da-truc-tuyen">>> Tructiepbongda.com</a></li>
                        <li><a href="http://www.xemtructiepbongda.net/">>>http://www.xemtructiepbongda.net/ </a></li>
                        <li><a href="http://thethao247.vn/xem-truc-tiep-bong-da/">>> Thethao24h.vn</a></li>
                        <li><a href="http://tv.101vn.com/xem-bong-da-truc-tuyen">>> tv.101vn.com</a></li>
                       
                    </ul>
                   
                </div>
		
                <p id="detail"><a href="broadcast.php"><strong>Xem tất cả trận đấu đang trực tiếp >></strong></a></p>
            </section>
        </div>
        <footer>
        <hr>
        <p>Copyright &copy 2017 Vietnamfootball.vn All rights reserved.</p>
        <p>The information contained in Vietnamfootball.vn may not be published, broadcast, rewritten, or redistributed without the prior written authority of Vietnamfootball.vn</p>
        </footer>
    </div>
</body>
<script>
	document.getElementById("default").click();
	/*Tab selection*/
	$("select#listLeague").css("background-image",'url(../image/'+$("select#listLeague").val()+'.png)');
	$("select#listLeague").change(function(){
	$("select#listLeague").css("background-image",'url(../image/'+$("select#listLeague").val()+'.png)');
	});
</script>
</html>
