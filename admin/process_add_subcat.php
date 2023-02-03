 <?php
				
		if(empty($_GET['subcat_name']))
		{
			echo "<script>alert('Category name empty');
location.href='add_cat_subcat.php';</script>";
		}
		else
		{		include "config.php";
						$q="INSERT INTO subcat_id(cat_id,subcat_name) VALUES('$_GET[cat_id]','$_GET[subcat_name]')";
						mysql_query($q);
						echo "<script>alert('category name added');
location.href='add_cat_subcat.php';</script>";
						
		}
		
	?>