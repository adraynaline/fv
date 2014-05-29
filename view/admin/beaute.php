<div id="beaute_content">
	<br/>
	<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
 		 Add an article
	</button>
		<br/><br/>

	<!-- Modal -->

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Add an Article</h4>
	      </div>
	      
	      <div class="modal-body">
	        <div id="first_step_modele">
	          Add the image Issue
	          <form action="model/admin/processupload2.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
	          <input name="ImageFile" id="imageInput" type="file" />
	          <input class="btn" type="submit"  id="submit-btn" value="Upload" />
	          
	          </form>
	          <div id="output"></div>
	         
	           <div class="modal-footer">
	         <button type="button" class="btn btn-default" id="next_step">Next Step</button>
	       
	          </form>
	        </div>
	      </div>
	        <div id="second_step_modele">
	            <form method="post" action="?appli=admin&action=add_beaute" id="formBeaute">
	         		Nom<br/>
	         		<input type="text" name="title" id="title"><br/>	
		            <input type="text" id="photo" name="photo" value=""><br/>
		            <input type="text" id="photo2" name="photo2" value=""><br/>
		            Description<br/>
		            <input type="text" id="description" name="description" value=""><br/>
		            Link<br/>
		            <input type="text" id="link" name="link" value=""><br/>	           
	          <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	          <button type="button" class="btn btn-default" id="previous_step">Previous Step</button>
	          <button type="submit" class="btn btn-primary">Save</button>
	            </form>
	        </div>
	      </div>
	      </div>
	     
	    </div>
	  </div>
	 
	</div>

	<!-- FIN MODAL -->

	<br><br>
	<center><button id="actif" class="btn btn-primary">Actif</button>    <button id="inactif" class="btn btn-default">Inactif</button></center><br>
	<div id="beaute_actif">
		<div class="table-responsive">
		  <table class="table">
		    <tr>
		    	<td>Id</td>
		    	<td>Titre</td>
		    	<td>Description</td>
		    	<td>Date Crea</td>
		    	<td>Date Update</td>
		    	<td>Voir</td>
		    	<td>Delete</td>
		    	<td>Update</td>
		    	<td></td>
		    </tr>
		    <?php foreach($beaute1 as $beaute): ?>
			    <tr>
			    	<td><?php echo $beaute['id']; ?></td>
			    	<td><a href="?appli=admin&action=showbeaute&id=<?php echo $beaute['id']; ?>"><?php echo $beaute['title']; ?></a></td>
			    	<td><?php echo $beaute['description']; ?></td>
			    	<td><?php echo $beaute['date_crea']; ?></td>
			    	<td><?php echo $beaute['date_update']; ?></td>
			    	<td>
			    		<button class="btn"><a href="?appli=admin&action=showbeaute&id=<?php echo $beaute['id']; ?>">Voir</a></button>
			    	</td>
			    	<td>
			    		<form method="post" action="?appli=admin&action=delete_beaute" id="formDeleteBeaute">
			    			<input type="hidden" name="id" id="id" value="<?php echo $beaute['id']; ?>">
			    			<input type="submit" class="btn" value="delete">
			    		</form>
			    	</td>
			    	<td><button class="btn"><a href="?appli=admin&action=updatebeaute&id=<?php echo $beaute['id']; ?>">Update</a></button></td>
			    	<td>Invisible</td>
			    </tr>
			<?php endforeach; ?>
		  </table>
		</div>
	</div>
	<div id="beaute_inactif">
		<div class="table-responsive">
		  <table class="table">
		    <tr>
		    	<td>Id</td>
		    	<td>Titre</td>
		    	<td>Description</td>
		    	<td>Date Crea</td>
		    	<td>Date Update</td>
		    	<td>Voir</td>
		    	<td>Delete</td>
		    	<td>Update</td>
		    	<td></td>
		    </tr>
		    <?php foreach($beaute0 as $beaute): ?>
			    <tr>
			    	<td><?php echo $beaute['id']; ?></td>
			    	<td><a href="?appli=admin&action=showbeaute&id=<?php echo $beaute['id']; ?>"><?php echo $beaute['title']; ?></a></td>
			    	<td><?php echo $beaute['description']; ?></td>
			    	<td><?php echo $beaute['date_crea']; ?></td>
			    	<td><?php echo $beaute['date_update']; ?></td>
			    	<td>
			    		<button class="btn"><a href="?appli=admin&action=showbeaute&id=<?php echo $beaute['id']; ?>">Voir</a></button>
			    	</td>
			    	<td>
			    		<form method="post" action="?appli=admin&action=delete_beaute" id="formDeleteBeaute">
			    			<input type="hidden" name="id" id="id" value="<?php echo $beaute['id']; ?>">
			    			<input type="submit" class="btn" value="delete">
			    		</form>
			    	</td>
			    	<td><button class="btn"><a href="?appli=admin&action=updatebeaute&id=<?php echo $beaute['id']; ?>">Update</a></button></td>
		    		<td>Visible</td>
			    </tr>
			<?php endforeach; ?>
		  </table>
		</div>
	</div>
</div>