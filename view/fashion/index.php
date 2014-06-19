<div id="menufor">
	<p>forher <span><img width="50px" src="images/private/redlips-outline.png"></span></p>
	<p>forhim <span><img width="50px" src="images/private/perfum.png"></span></p>
	
</div><br>
<div id="content">
	<div id="hover_content">
		<table width="100%">
			<tr style="vertical-align:middle">
				<td width="50%" align="center">
					<p>#for her</p>
				</td>
				<td width="50%" align="center">
					<p>#for him</p>
				</td>
			</tr>
			<tr style="vertical-align:middle">
				<td width="50%" align="center" id="redlips">
					<img width="100%" min-width="400px" src="images/private/redlips-outline.png">
				</td>
				<td width="50%" align="center" id="perfum">
					<img width="100%" min-width="400px" src="images/private/perfum.png">
				</td>
			</tr>
		</table>
	</div>
	<div id="choicefor">
		<p>#For Her</p><p> Change #For Him</p>
		<div class="clear"></div>
	</div>
	<br>
	<div id="forhim">
		<?php foreach ($forhim as $him): ?>
			<div class="forhim">
				<a href="?appli=beauty&action=show&id=<?php echo $him['id'];?>">
					<img class="imgLiquidFill" src="<?php echo $him['min_img'] ?>"><br/>
					<p class="title_all_beauty"><?php echo $him['title']; ?></p>
					<p class="desc_all_beauty"><?php echo $him['description']; ?></p>
				</a>
			</div>
		<?php endforeach ?>
	</div>
	<div id="forher">
		<?php foreach ($forher as $her): ?>
			<div class="forher ">
				<a href="?appli=beauty&action=show&id=<?php echo $him['id'];?>">
					<div data-imgLiquid-fill="true"
        data-imgLiquid-horizontalAlign="center"
        data-imgLiquid-verticalAlign="50%" style="max-width:500px;width:100%;min-width:300px;max-height:500px;height:30%;min-height:300px" class="imgLiquidFill imgLiquid">
					<img width="100%" height="100%" src="<?php echo $her['min_img'] ?>"><br/>
				</div>
					<p class="title_all_beauty"><?php echo $her['title']; ?></p>
					<p class="desc_all_beauty"><?php echo $her['description']; ?></p>
				</a>
			</div>

		<?php endforeach ?>
	</div>
</div>
