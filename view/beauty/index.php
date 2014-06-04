<br>
<div id="content">
	<div id="choicefor">
		<p>For Her</p><p>For Him</p>
		<div class="clear"></div>
	</div>
	<br>
	<div id="forhim">
		<?php foreach ($forhim as $him): ?>
			<div class="forhim">
				<a href="?appli=beauty&action=show&id=<?php echo $him['id'];?>">
					<img src="<?php echo $him['min_img'] ?>"><br/>
					<p class="title_all_beauty"><?php echo $him['title']; ?></p>
					<p class="desc_all_beauty"><?php echo $him['description']; ?></p>
				</a>
			</div>
		<?php endforeach ?>
	</div>
	<div id="forher">
		<?php foreach ($forher as $her): ?>
			<div class="forher">
				<a href="?appli=beauty&action=show&id=<?php echo $him['id'];?>">
					<img src="<?php echo $her['min_img'] ?>"><br/>
					<p class="title_all_beauty"><?php echo $her['title']; ?></p>
					<p class="desc_all_beauty"><?php echo $her['description']; ?></p>
				</a>
			</div>

		<?php endforeach ?>
	</div>
</div>
