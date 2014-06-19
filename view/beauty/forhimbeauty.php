<?php foreach ($forhim as $him): ?>
			<div class="forhim">
				<a href="?appli=beauty&action=show&id=<?php echo $him['id'];?>">
					<img src="<?php echo $him['min_img'] ?>"><br/>
					<p class="title_all_beauty"><?php echo $him['title']; ?></p>
					<p class="desc_all_beauty"><?php echo $him['description']; ?></p>
				</a>
			</div>
		<?php endforeach ?>