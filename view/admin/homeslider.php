<div id="issue_content">
<br/><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Add an Image to Slider
</button>
<br/><br/>

	<!-- Modal -->

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Add an Image</h4>
	      </div>
	      
	      <div class="modal-body">
	      	
	            <form method="post" action="?appli=admin&action=homeslider" id="formHomeSlider">
	         		<select name="id_img">
	         		<?php	foreach($filtre as $filtre): ?>
	         			<option value="<?php echo $filtre['id']; ?>"><?php echo $filtre['title']; ?></option>
	         		<?php endforeach; ?>
	         		</select>	
	      </div>
	        
		            
		            
	           
	          <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	         
	          <button type="submit" class="btn btn-primary">Save</button>
	            </form>
	       
	      </div>
	      </div>
	     
	    </div>
	  </div>
	 
	</div>

	<!-- FIN MODAL -->
	<div class="table-responsive">
	  <table class="table">
	    <tr>
	    	<td>id</td>
	    	<td>img</td>
	    	<td>Titre</td>
	    	<td>Description</td>
	    	<td>Date Crea</td>
	    	<td>Show</td>
	    	<td>Delete</td>
	    	
	    </tr>
	    <?php foreach($img_slider as $img): ?>
		    <tr>
		    	<td><?php echo $img['id']; ?></td>
		    	<td><img width="100px" src="<?php echo $img['min_img']; ?>"></td>
		    	<td><a href="?appli=admin&action=showbeaute&id=<?php echo $img['id']; ?>"><?php echo $img['title']; ?></a></td>
		    	<td><?php echo $img['description']; ?></td>
		    	<td><?php echo $img['date_crea']; ?></td>
		    	
		    	<td><button class="btn"><a href="?appli=admin&action=showbeaute&id=<?php echo $img['id']; ?>">Show</a></button></td>
		    	<td>
		    		<form method="post" action="?appli=admin&action=delete_homeslider" id="formDeleteHomeslider">
			    		<input type="hidden" name="id" id="id" value="<?php echo $img['id']; ?>">
			    		<input type="submit" class="btn" value="delete">
			    	</form>
		    	</td>
		    	
		    </tr>
		<?php endforeach; ?>
	  </table>
	</div>
	
</div>