<div id="issue_content">
<br/><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Add a Product
</button>
<br/><br/>

	<!-- Modal -->

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Add a Product</h4>
	      </div>
	      
	      <div class="modal-body">
	        <div id="first_step_modele">
	         
	         <form class="form-inline" role="form" method="post" action="?appli=admin&action=add_product" id="formAddProduct">
		<div class="form-group">
          	  <input type="file" name="fileUpload1" id="fileUpload1" class="fileUpload bt vert" />
          	  <input type="hidden" id="photo" name="photo" value="">
        	  <div id="previews"></div>
        	  <div id="response"></div>
		</div><br/>
		Title <br>
		<input class="form-control" type="text" name="titre_pro" id="titre" value=""><br/>
		Description <br>
		<input class="form-control" type="text" name="desc_pro" id="description" value=""><br/>
		Link <br>
		<input class="form-control" type="text" name="link_pro" id="link" value=""><br/>
		<input type="hidden" name="id" id="id" value="<?php echo $id ?>">
		<button type="submit" class="btn btn-success">
			OK
		</button>

	</form>
	        </div>
	      </div>
	      </div>
	     
	    </div>
	  </div>
	 
	</div>

	<!-- FIN MODAL -->
	<div class="table-responsive">
		  <table class="table">
		    <tr>
		    	<td>Id</td>
		    	<td>Img</td>
		    	<td>Name</td>
		    	<td>Description</td>
		    	<td>Show</td>
		    	<td>Delete</td>
		    	<td>Update</td>
		    </tr>
		    <?php foreach($products as $product): ?>
			    <tr>
			    	<td><?php echo $product['id']; ?></td>
			    	<td><img width="200px" src="<?php echo $product['photo']; ?>"></td>
			    	<td><a href="?appli=admin&action=showproduct&id=<?php echo $product['id']; ?>"><?php echo $product['titre_pro']; ?></a></td>
			    	<td><?php echo $product['desc_pro']; ?></td>
			    	<td>
			    		<button class="btn"><a href="?appli=admin&action=showbeaute&id=<?php echo $product['id']; ?>">Show</a></button>
			    	</td>
			    	<td>
			    		<form method="post" action="?appli=admin&action=delete_product" id="formDeleteProduct">
			    			<input type="hidden" name="id" id="id" value="<?php echo $product['id']; ?>">
			    			<input type="submit" class="btn" value="Delete">
			    		</form>
			    	</td>
			    	<td><button class="btn"><a href="?appli=admin&action=updatebeaute&id=<?php echo $product['id']; ?>">Update</a></button></td>
			    </tr>
			<?php endforeach; ?>
		  </table>
		</div>
</div>