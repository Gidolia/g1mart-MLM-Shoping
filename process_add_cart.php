<?php include"config.php";
if(empty($_SESSION['id']))
{echo "<script>alert('Invalid user name or Password');
location.href='add_cat_subcat.php';</script>";
}
else{
	$d_id=$_SESSION['id'];
	$p_id=$_GET['p_id'];
	$ins="INSERT INTO d_cart(d_id,p_id,quantity) VALUES('$d_id','$p_id','1')";
	mysql_query($ins);
	}
?>