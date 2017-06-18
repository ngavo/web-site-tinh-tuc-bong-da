<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bảng xếp hạng - Vietnam Football</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style/style3.css?<?php echo time() ?>">
<script src="https://use.fontawesome.com/99796656b2.js"></script>
<script src="script/script3.js"></script>
 <style>
   table
  {
   border-collapse: collapse;
	margin: auto;
	text-align:center;
	border:1px solid #0C3;
  }
  th
  {
	  border: 1px solid #0C3;
	  height:30px;
	  background-color:#FF0;
	}
  td
  {
	  border: 1px solid #0C3;
  }
  td.doi
  {
	  width:60px;
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
        	<p class="chooseLeague"><strong>Chọn giải: </strong></p>
        	<div class="dropdown">
            <select id="listLeague" name="listLeague" onchange="Show()">;
             	<option value="premierLeagueIcon">Ngoại Hạng Anh</option>
                <option value="laLigaIcon" >La Liga</option>
                <option value="vLeagueIcon">V-League</option>
                <option value="championLeagueIcon" selected="selected">Champion League</option>
        
            </select>
            </div>
		 
         <?php
			require('simple_html_dom.php');
			
			$html = file_get_html('http://www.24h.com.vn/bang-xep-hang-bong-da/bang-xep-hang-cup-c1-champions-league-c295a400193.html');
		
			$bang = $html->find('table[class="table table-bordered"]',0);
			
			$thead = $bang->find('thead tr th');
			
			$row = $bang->find('tbody tr');
			
			$img_array = array();
			$club_name = array();
			foreach($row as $r)
			{
				array_push($img_array,$r->find('img',0));
				array_push($club_name,$r->find('div.bxh-ten-doi-bong-da',0));
			}
			
			
			echo '<table >';
			echo 	'<thead>';
			echo		'<tr>';
						foreach ($thead as $th)
						{
							echo '<th>' . $th->innerText() . '</th>';
						}
			echo		'</tr>';
			echo	'</thead>';
			echo	'<tbody>';
						for($i=0;$i<count($row);$i++)
						{
							$column = $row[$i]->find('td');
			echo			'<tr class="tr">';
							for($j=0;$j<count($column);$j++)
							{
								if($j==1)
								{
			echo					'<td class="teams">';
			echo					'<div class="bxh-anh-bong-da">';
			echo					$img_array[$i];
			echo					'</div>';
			echo					'<div class="bxh-ten-doi-bong">';
			echo					$club_name[$i]->innerText();
			echo					'</div>';
			echo					'</td>';
								}
								else
								{
			echo					'<td class="doi">' . $column[$j]->innerText() . '</td>';
								}
							}
			echo			'</tr>';
						}
			echo	'</tbody>';
			echo '</table>';
			
			echo $tt = $html->find('div.table-two',0);

?>
        </div>
        <script type="text/javascript">
		 	function Show()
			{
				var x = document.getElementById("listLeague").value;
				
				if(x=="premierLeagueIcon")
				{
					window.location.href="bangxephangAnh.php";
				}
				
				if(x == "laLigaIcon")
				{
				//	window.location.href = "laLigaIcon.php"
				}
				if(x=="vLeagueIcon")
				{
					window.location.href = "vLeagueIcon.php";
				}
				if(x=="championLeagueIcon")
				{
				//	window.location.href = "championLeagueIcon.php";
				}
				if(x=="europaLeagueIcon")
				{
					window.location.href = "europaLeagueIcon.php";
				}
				
			
			}
			Show();
		 </script>
        <footer>
        <p>Copyright &copy 2017 Vietnamfootball.vn All rights reserved.</p>
        <p>The information contained in Vietnamfootball.vn may not be published, broadcast, rewritten, or redistributed without the prior written authority of Vietnamfootball.vn</p>
        </footer>
    </div>
</body>
</html>
