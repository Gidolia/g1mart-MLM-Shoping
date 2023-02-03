<?php
if (empty($_GET['p_name']))
{
			echo "<script>alert('please fill all the information');
location.href='add_cat_subcat.php';</script>";
		}
else{
include "config.php"; 
$P_name=$_GET['p_name'];
$subcat_id=$_GET['subcat_id'];
$p_description=$_GET['p_description'];
$p_weight=$_GET['p_weight'];
$p_mrp=$_GET['p_mrp'];
$p_selling_price=$_GET['P_selling_price'];
$p_purchase_price=$_GET['p_purchase_price'];
$bill_no=$_GET['bill_no'];
$unit=$_GET['unit'];
$p_main_pic="product_image".$_GET[p_main_pic];

$ins="INSERT INTO product(subcat_id,p_name,p_description,p_weight,P_mrp,P_purchase_price,p_selling_price,unit,p_main_pic) VALUES('$subcat_id','$P_name','$p_description','$p_weight','$p_mrp','$p_purchase_price','$p_selling_price','$unit','$p_main_pic')";
mysql_query($ins);
						echo "<script>alert('product information added');
location.href='add_product.php';</script>";
}
?>