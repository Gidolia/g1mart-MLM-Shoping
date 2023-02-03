 <?php
				
		if(empty($_GET['cat_name']))
		{
			echo "<script>alert('Category name empty');
location.href='add_cat_subcat.php';</script>";
		}
		else
		{		include "config.php";
						$q="INSERT INTO category(cat_name) VALUES('$_GET[cat_name]')";
						mysql_query($q);
						echo "<script>alert('category name added');
location.href='add_cat_subcat.php';</script>";
						
		}
		
	?>