<?php foreach ($forher as $her): ?>
			<div class="forher">
				<a href="?appli=beauty&action=show&id=<?php echo $him['id'];?>">
					<img src="<?php echo $her['min_img'] ?>"><br/>
					<p class="title_all_beauty"><?php echo $her['title']; ?></p>
					<p class="desc_all_beauty"><?php echo $her['description']; ?></p>
				</a>
			</div>

		<?php endforeach ?>