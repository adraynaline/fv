<div id="issue_content">
<br/><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Add an issue
</button>
<br/><br/>

	<!-- Modal -->

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Add an Issue</h4>
	      </div>
	      
	      <div class="modal-body">
	        <div id="first_step_modele">
	          Add the image Issue - Size 208px X 310px please or proportionnal
	          <form action="model/admin/processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
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
	            <form method="post" action="?appli=admin&action=add_issue" id="formIssue">
	         		Nom<br/>
	         		<input type="text" name="nom" id="nom"><br/>	
		            <input type="text" id="photo" name="photo" value=""><br/>

		            
	           
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

	<div id="left_issue">
		Issue actuellement affichée 
		<br/><br/>
		<div>
			<?php echo $issue['nom'].'<br/>'; ?>
			<img width="90%" src="<?php echo $issue['image'] ?>">
		</div>
	</div>
	<div id="right_issue">
		Les issues précedentes<br/><br/>
		<?php foreach($older_issue as $older): ?>
			<div>
				<?php echo $older['nom']; ?><br/>
				<img width="70%" src="<?php echo $older['image'] ?>">
			</div><br/>
		<?php endforeach; ?>
	</div>
	<div class="clear"></div>
</div>