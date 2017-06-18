<!doctype html>
<html>
<head>
 <style>
   table
  {
   border-collapse: collapse;
	margin: auto;
	text-align:center;
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
  <meta charset="utf-8">
    <title>Bảng xếp hạng - Vietnam Football</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style3.css?<?php echo time() ?>">
    <script src="https://use.fontawesome.com/99796656b2.js"></script>
    <script src="script/script3.js"></script>
</head>
<body>
<?php
	require('simple_html_dom.php');
	
	$html = file_get_html('http://www.24h.com.vn/bang-xep-hang-bong-da/bang-xep-hang-bong-da-anh-c295a466585.html');

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

?>
</body>

</html>