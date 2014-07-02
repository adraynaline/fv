<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FV</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/<?php echo PAGE_CSS ?>.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.pageslide.css">
	
</head>
<body>
<!-- header version ordinateur -->
<div id="header_pc">
	<div id="subscribe">
		<table width="100%" height="100%">
			<tr height="100%">
				<td width="50%"></td>
				<td width="10%" vertical-align="middle"><p>Subscribe<p></td>
				<td width="25%">
					<center>
						<div id="social_network">
							<a href="https://www.facebook.com/pages/FV-Magazine/159236847603038" target="blank"><img src="images/private/fb.jpg"></a>
							<a href="http://instagram.com/fvmagazine" target="blank"><img src="images/private/insta.jpg"></a>
							<a href="https://twitter.com/FVMagNYC" target="blank"><img src="images/private/twitter.jpg"></a>
							<a href="http://fvmag.tumblr.com/" target="blank"><img src="images/private/tumblr.jpg"></a>
						</div>
					</center>
				</td>
				<td width="15%"><center><input style="width:90%" class="form-control" type="search" ></center></td>
			</tr>
		</table>
	</div><br>
	<div class="container">
		<header>
			<div id="header_left">
				<img id="logo_header" src="images/private/logo_b&w.png">
			</div>
			<div id="header_right">

				<img id="issue_header" src="images/<?php echo $issue['image']; ?>">
				<div style="width:400px; height:310px;float:right" >
					<img width="100%" min-width="400px"height="100%" src="images/<?php echo $pub['image']; ?>">
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>		
		</header>
		<div class="clear"></div>		
		<nav id="navpc">
			<img width="100%" src="images/private/menu_design.png">
			

			<ul>
				<li><a href="?appli=home">HOME</a></li>
				<li><a href="?appli=fashion">FASHION</a></li>
				<li><a href="?appli=beauty">BEAUTY</a></li>
				<li><a href="?appli=Art+Culture">ART+CULTURE</a></li>
				<li><a href="">LOVE</a></li>
				<li><a href="">LUXE</a></li>
				<li><a href="">SHOP</a></li>
			</ul>

			<div class="clear"></div>		
			<img width="100%" src="images/private/menu_design.png">
			<div class="clear"></div>		
		</nav>
	</div>	
</div>
<!-- END HEADER COMPUTER -->
<!-- STRAT HEADER MOBILE -->
<div id="header_mobil">
	<div id="modal" style="display:none">
    <h2>MENU</h2>
	    <ul>
			<li><a href="?appli=home">HOME</a></li>
			<li><a href="?appli=fashion">FASHION</a></li>
			<li><a href="?appli=beauty">BEAUTY</a></li>
			<li><a href="">ART+CULTURE</a></li>
			<li><a href="">LOVE</a></li>
			<li><a href="">LUXE</a></li>
			<li><a href="">SHOP</a></li>
		</ul>
    <a href="javascript:$.pageslide.close()">Close</a>
	</div>
	<div id="subscribe">
		<center>
			<div id="social_network">"
				<a href="https://www.facebook.com/pages/FV-Magazine/159236847603038" target="blank"><img src="images/private/fb.jpg"></a>
				<a href="http://instagram.com/fvmagazine" target="blank"><img src="images/private/insta.jpg"></a>
				<a href="https://twitter.com/FVMagNYC" target="blank"><img src="images/private/twitter.jpg"></a>
				<a href="http://fvmag.tumblr.com/" target="blank"><img src="images/private/tumblr.jpg"></a>
			
			</div>
		</center>
		<center><input style="width:90%" class="form-control" type="search" ></center>
	</div><br>
	<div class="container">
		<header>
			<div id="header_left">
				<img  width="100px" src="images/private/logo_b&w.png">
			</div>
			<div id="header_right">

				
			</div>
			<div class="clear"></div>		
		</header>
		<div class="clear"></div>		
		<nav id="navpc">
			<img width="100%" src="images/private/menu_design.png">
			

			<ul>
				<li><a href="#modal" class="second">=</a></li>
				
			</ul>

			<div class="clear"></div>		
			<img width="100%" src="images/private/menu_design.png">
					
		</nav>
	</div>
</div>
<div class="container">
<!-- END HEADER MOBILE -->