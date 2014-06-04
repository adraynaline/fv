
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