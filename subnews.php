<?php
				if(isset($_GET['xem']))
				{
	               require 'simple_html_dom.php';
					$tam = $_GET['xem'];
					$html = file_get_html($tam);
		
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
						
							foreach($add_array as $t)
							{
								$lay_h3 = $t->find('h3.title_news a',0);
								
								//lay href
								$href_h3 = $lay_h3->href;
								//lay title cuar h3
								$title_h3 = $lay_h3->innerText();
								//lay image
								$image = $t->find('div.thumb img',0);
								//lấy nội dung trong một li
								$content = $t->find('div.news_lead',0);
								
								//dua h3 vao the div
								echo '<div class="title_news">';
								echo '<h3><a href="chitiet.php?tintuc='.$href_h3. '"' . 'title="'. $title_h3 .'">'. $title_h3 . '</a></h3>';
								echo '</div>';
								echo '<div>';
								//dua image vao the div
								echo '<div class="image" style="float:left">';
								echo '<h3><a href="chitiet.php?tintuc='.$href_h3. '"' . 'title="'. $title_h3 .'">'. $image . '</a></h3>'; 
								echo '</div>';
								
								echo '<div style="margin-left:200px;">';
								echo $content;
								echo '</div>';
								echo '</div>';
								echo '<div style="clear:both"></div>';
								
							}
					
					
				}
				else
				{
					require 'simple_html_dom.php';
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
					
						foreach($add_array as $t)
						{
							$lay_h3 = $t->find('h3.title_news a',0);
							
							//lay href
							$href_h3 = $lay_h3->href;
							//lay title cuar h3
							$title_h3 = $lay_h3->innerText();
							//lay image
							$image = $t->find('div.thumb img',0);
							//lấy nội dung trong một li
							$content = $t->find('div.news_lead',0);
							echo "--------------------------------------------";
							//dua h3 vao the div
							echo '<div class="title_news">';
							echo '<h3><a href="chitiet.php?tintuc='.$href_h3. '"' . 'title="'. $title_h3 .'">'. $title_h3 . '</a></h3>';
							echo '</div>';
							echo '<div>';
							//dua image vao the div
							echo '<div class="image" style="float:left">';
							echo '<h3><a href="chitiet.php?tintuc='.$href_h3. '"' . 'title="'. $title_h3 .'">'. $image . '</a></h3>'; 
							echo '</div>';
							
							echo '<div style="margin-left:200px">';
							echo $content;
							echo '</div>';
							echo '</div>';
							echo '<div style="clear:both"></div>';
							echo "----------------------------------------------";
							
							
						}
						
				}
?>