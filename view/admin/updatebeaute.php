Update de l'article beauté numero <?php echo $show_beaute['id']; ?> crée le <?php echo $show_beaute['date_crea'] ?> est intitulé <?php echo $show_beaute['title'] ?><br/><br>
<form method="post" action="?appli=admin&action=update_beaute" id="formUpdateBeaute">
	<input type="hidden" name="id" id="id" value="<?php echo $show_beaute['id']; ?>">
	<input type="text" name="title" id="title" value="<?php echo $show_beaute['title']; ?>"><br/>
	<input type="text" name="description" id="description" value="<?php echo $show_beaute['description']; ?>"><br/>
	<input type="submit" value="Update" class="btn">
</form>