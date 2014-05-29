<div id="subscribe">
	<table width="100%" height="100%">
		<tr height="100%">
			<td width="50%"></td>
			<td width="10%" vertical-align="middle"><p>Subscribe<p></td>
			<td width="25%">
				<center>
					<div id="social_network">
						<img src="images/private/fb.jpg">
						<img src="images/private/insta.jpg">
						<img src="images/private/twitter.jpg">
						<img src="images/private/tumblr.jpg">
					</div>
				</center>
			</td>
			<td width="15%"><center><input class="form-class" type="search" ></center></td>
		</tr>
	</table>
	
	
</div>
<div class="container">

	<header>
		<img src="images/private/logo.jpg">
		<img id="issue_header" src="<?php echo $issue['image']; ?>">
		<img id="pub_header" src="<?php echo $pub['image']; ?>">
				
	</header>


	<nav>
		<img src="images/private/menu_design.png">
		<ul>
			<li><a href="">HOME</a></li>
			<li><a href="">FASHION</a></li>
			<li><a href="">BEAUTY</a></li>
			<li><a href="">ART+CULTURE</a></li>
			<li><a href="">LOVE</a></li>
			<li><a href="">LUXE</a></li>
			<li><a href="">SHOP</a></li>
		</ul>
		<img src="images/private/menu_design.png">
	</nav>
	<div id="content">
		<div id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			  	<?php foreach($img_slider as $img_slider): ?>
			    <div style="height:602px" class="item">
			      <img  src="<?php echo $img_slider['min_img']; ?>" alt="...">
			      <div class="carousel-caption">
			        <?php echo $img_slider['title']; ?>
			        <?php echo $img_slider['description']; ?>
			      </div>
			    </div>
			    <?php endforeach; ?>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div>
		</div>
		<br/>
		<div id="editor_obsession">
			<img src="images/private/obsession_editor.png">
			<div id="blocs">
				<div class="bloc">
					<div class="img_bloc">

					</div>
					<div class="description_bloc">
						<p>#A-LIST |  LOS ANGELES <br/><br/>
							FASHION :  LUCY MC KINTOSH<br/>
							BY DARREN TIESTE + RAFAEL LINAES    </p>
					</div>
				</div>
				<div class="bloc">
					<div class="img_bloc">

					</div>
					<div class="description_bloc">
						<p>#A-LIST |  LOS ANGELES <br/><br/>
							FASHION :  LUCY MC KINTOSH<br/>
							BY DARREN TIESTE + RAFAEL LINAES    </p>
					</div>
				</div>
				<div class="bloc">
					<div class="img_bloc">

					</div>
					<div class="description_bloc">
						<p>#A-LIST |  LOS ANGELES <br/><br/>
							FASHION :  LUCY MC KINTOSH<br/>
							BY DARREN TIESTE + RAFAEL LINAES    </p>
					</div>
				</div>
			</div>
		</div>
		<div id="love-x">

		</div>
	</div>
</div>