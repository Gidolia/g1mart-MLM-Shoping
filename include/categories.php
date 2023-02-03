<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">CATEGORIES</h3>
                    <ul class="menu">
                    <?php
                    											$query="select * from category ";
			
											$res=mysql_query($query);
											
											while($row=mysql_fetch_assoc($res))
											{
												echo "<li class='item1'><a href=''>".$row['cat_name']."<img class='arrow-img' src='images/arrow1.png' alt=''/></a>";
												
												?>
                                                <ul class="cute">
                                                <?php
												$qq = "select * from subcat_id where cat_id=".$row['cat_id'];
												$ress = mysql_query($qq);
												while($roww = mysql_fetch_assoc($ress))
												{?>
                                                
                                                <?php
													echo '<li><a href="product.php?subcat_id='.$roww['subcat_id'].'&subcat_name='.$roww["subcat_name"].'">'.$roww["subcat_name"].'</a></li>';
												}?>
											</ul></li>
											
											<?php	
												
											}
											?>

		 
		
			</ul>
		
	</u>
</div>