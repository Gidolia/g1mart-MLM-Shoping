<?php
session_start();
if(isset($_POST["login"]))	
{
include "config.php";
$_SESSION["id"]=$_POST["id"];
$_SESSION["password"]=$_POST["password"];
$q="select * from distributor where d_id='$_POST[id]' and password='$_POST[password]'";
$res=mysql_query($q);
$c=mysql_num_rows($res);
if($c!=0)
{
header("location:index.php");
}
else
{
echo "<script>alert('Invalid user name or Password');
location.href='add_cat_subcat.php';</script>";
}
}
?>