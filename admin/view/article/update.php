Update de l'article beauté numero <?php echo $show['id']; ?> crée le <?php echo $show['date_crea'] ?> est intitulé <?php echo $show['title'] ?><br/><br>
<form method="post" action="?appli=article&action=update_article" id="formUpdateBeaute">
	<input type="hidden" name="id" id="id" value="<?php echo $show['id']; ?>">
	<input type="text" name="title" id="title" value="<?php echo $show['title']; ?>"><br/>
	<input type="text" name="description" id="description" value="<?php echo $show['description']; ?>"><br/>
	<input type="submit" value="Update" class="btn">
</form>