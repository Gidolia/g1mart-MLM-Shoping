<?php include "config.php";?>
<?php session_start();

	$cat=$_GET['subcat_id'];
	
	$totalq="select count(*) \"total\" from product where subcat_id='$cat'";
	
	$totalres=mysql_query($totalq) or die("Can't Execute Query...");
	$totalrow=mysql_fetch_assoc($totalres);
	
	
	$page_per_page=6;
	
	$page_total_rec=$totalrow['total'];
	
	$page_total_page=ceil($page_total_rec/$page_per_page);
	
	
	if(!isset($_GET['page']))
	{
		$page_current_page=1;
	}
	else
	{
		$page_current_page=$_GET['page'];
	}
	
	
	

?>

<!DOCTYPE html>
<html>
<head>
<title>G1mart</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.min.js"></script>


<!--script-->
</head>
<body> 
	<!--header-->
<?php include "include/header.php";?>
	<!---->
	<!-- start content -->
	<div class="container">
		
	<div class="women-product">
		<div class=" w_content">
			<div class="women">
				<a href="#"><h4><?php echo $_GET['subcat_name'];?></h4></a>
				<ul class="w_nav">
					<li>Sort : </li>
			     	<li><a class="active" href="#">popular</a></li> |
			     	<li><a href="#">new </a></li> |
			     	<li><a href="#">discount</a></li> |
			     	<li><a href="#">price: Low High </a></li> 
			     <div class="clearfix"> </div>	
			     </ul>
			     <div class="clearfix"> </div>	
			</div>
		</div>
		<!-- grids_of_4 -->
        <div class="grid-product">
        <?php
												
												$k=($page_current_page-1)*$page_per_page;
											
												$query="select * from product where subcat_id='$cat' LIMIT ".$k .",".$page_per_page;
	
												$res=mysql_query($query) or die("Can't Execute Query...");
	
												$count=0;
												while($row=mysql_fetch_assoc($res))
												{
													?>

                                                    <?php
													if($count==0)
													{
														echo '<tr>';
													}	
													echo '
		<div class="product-grid">
			<div class="content_box"><a href="single.html">
			   	<div class="left-grid-view grid-view-left">														<a href="single.php?p_id='.$row['p_id'].'&p_name='.$_GET['p_name'].'">
													<img src="'.$row['p_main_pic'].'" class="img-responsive watch-right" alt="" height="210px" width="240px" />
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  
				</div>
														<h4>'.$row['p_name'].'</h4></a><p>It is a long established fact that a reader</p>
				     Rs.&nbsp;'.$row['p_mrp'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B.V&nbsp;'.$row['p_bv'].'<br>&nbsp;
			   	</div>
              </div>';
													$count++;							
													
													if($count==2)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
				    
			 			<div class="clearfix"> </div></div>
                        <div class="clearfix"> </div></div>
		
	<div class="sub-cate">
	<?php include "include/categories.php";?>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
					<div class=" chain-grid menu-chain">
	   		     		<a href="single.html"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>	   		     		
	   		     		<div class="grid-chain-bottom chain-watch">
		   		     		<span class="actual dolor-left-grid">300$</span>
		   		     		<span class="reducedfrom">500$</span>  
		   		     		<h6>Lorem ipsum dolor</h6>  		     			   		     										
	   		     		</div>
	   		     	</div>										<?php
											
											if($page_total_page>$page_current_page)
											{
												echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page+1).'">Next</a>';
											}
											
											for($i=1;$i<=$page_total_page;$i++)
											{
												echo '&nbsp;&nbsp;<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
											}
											
											if($page_current_page>1)
											{	
												echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page-1).'">Previous</a>';
											}
											
										?>

	   		     	 <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a> 	
			</div>
	<div class="clearfix"> </div>
</div>
	
    <!---->
    <?php include "include/footer.php";?>
	</body>
</html>