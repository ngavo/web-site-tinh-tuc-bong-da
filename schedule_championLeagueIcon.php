<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bảng xếp hạng - Vietnam Football</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style/style4.css?<?php echo time() ?>">
<script src="https://use.fontawesome.com/99796656b2.js"></script>
<script src="script/script4.js"></script>
<style>
    table
	{
		border-collapse: collapse;
		border: #009;
		
	}
</style>
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
       	<div class="content">
        	<div class="column-one">
            	<p class="chooseLeague"><strong>Chọn giải: </strong></p>
                <div class="dropdown">
                <form>
                    <select id="listLeague" name="listLeague" onChange="Show()">
                        <option value="premierLeagueIcon">Ngoại Hạng Anh</option>
                        <option value="laLigaIcon">La Liga</option>
                        <option value="vLeagueIcon">V-League</option>
                        <option value="championLeagueIcon"  selected="selected">Champion League</option>
                    </select>
                    
                  </form>
                </div>
                 <?php
				require ('simple_html_dom.php');
				
				$html = file_get_html('http://www.24h.com.vn/lich-thi-dau-bong-da/lich-thi-dau-cup-c1-champions-league-2012-13-c287a465411.html?nguon=box_bai_lien_quan_tren_pc');
				
				$content = $html->find('table.tbl-ds-hot tbody',0);
				echo '<table>';
				echo $content;
				echo '</table>';
			?>
            </div>
           
        	<script type="text/javascript">
		 	function Show()
			{
				var x = document.getElementById("listLeague").value;
				if(x=="premierLeagueIcon")
				{
					window.location.href="schedule.php";
				}
				if(x == "laLigaIcon")
				{
					window.location.href = "schedule_laLigaIcon.php"
				}
				if(x=="vLeagueIcon")
				{
					window.location.href = "schedule_vLeagueIcon.php";
				}
				if(x=="championLeagueIcon")
				{
				//	window.location.href = "schedule_championLeagueIcon.php";
				}
				if(x=="europaLeagueIcon")
				{
					window.location.href = "schedule_europaLeagueIcon.php";
				}
				
			
			}
			Show();
		 </script>
        </div>
        <footer>
        <p>Copyright &copy 2017 Vietnamfootball.vn All rights reserved.</p>
        <p>The information contained in Vietnamfootball.vn may not be published, broadcast, rewritten, or redistributed without the prior written authority of Vietnamfootball.vn</p>
        </footer>
    </div>
</body>
</html>
