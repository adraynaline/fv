<div id="content">
	<div id="header_beauty_detail">
	<p><?php echo $_GET['appli']; ?> / #FOR<?php echo $selected['forh']; ?>	</p>
	<img width="400px" height="300px" src="<?php echo $selected['img']; ?>">
	</div><BR>
	<div id="content_product">
		<?php foreach($products as $product): ?>
			<img height="400px" src="<?php echo $product['photo']; ?>	">
		<?php endforeach; ?>
	</div>
</div>
