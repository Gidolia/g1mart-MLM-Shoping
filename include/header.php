<!--header-->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul class="support">
						<li><a href="#"><label> </label></a></li>
						<li><a href="#">24x7 live<span class="live"> support</span></a></li>
					</ul>
					<ul class="support">
						<li class="van"><a href="#"><label> </label></a></li>
						<li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
					</ul>
                    <ul class="support">
						<li class="van"><a href="#"><label> </label></a></li>
						<li><a href="#"><span class="live">on order over 500</span></a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>		
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="G1mart" height="86" width="205px" /></a>
					</div>
					<div class="search">
						<form>
							<input type="text" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" >
							<input type="submit"  value="SEARCH">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">				
						<div class="account"></a><?php if (isset($_SESSION[id])){echo '<li><a href="logout.php"><span> </span>YOUR ACCOUNT('.$_SESSION[id].')</a></li>';}?></div>
							<ul class="login">
								<?php if (isset($_SESSION[id])){echo '<li><a href="logout.php"><span> </span>LOGOUT</a></li>';} else { echo '<li><a href="login.php"><span> </span>login</a></li>';}?>
                                
							</ul>
						<div class="cart"><a href="#"><span> </span>CART</a></div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>	
			</div>
		</div>
	</div>