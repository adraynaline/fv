<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
	 Add content article
</button>
<br/><br/>
<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">  
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Add content of the Article</h4>
	      </div>
	      
	      <div class="modal-body">
	        	<form method="post" action="?appli=admin&action=add_content_article" id="formAddContentArticle">
	        		<input type="hidden" id="id_article" name="id_article" value="<?php echo $show_beaute['id']; ?>">
	        		<textarea name="textarea_content" class="textarea" id="tinyeditor" style="width: 400px; height: 200px" placeholder="Enter text here"></textarea>
	      </div>          
	      <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-default" id="previous_step">Previous Step</button>
			<button type="submit" class="btn btn-primary">Save</button>   
				</form>         
	       </div>
	     	
	      </div>
	     
	    </div>
	</div>
	<!-- FIN MODAL -->
<script>
var editor = new TINY.editor.edit('editor', {
	id: 'tinyeditor',
	width: '90%',
	height: 375,
	cssclass: 'tinyeditor',
	controlclass: 'tinyeditor-control',
	rowclass: 'tinyeditor-header',
	dividerclass: 'tinyeditor-divider',
	controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
		'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
		'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
		'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink'],
	footer: true,
	fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
	xhtml: true,
	cssfile: 'custom.css',
	bodyid: 'editor',
	footerclass: 'tinyeditor-footer',
	toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
	resize: {cssclass: 'resize'}
});
</script>
<br/>
Preview de l'article : <?php echo $show_beaute['title']; ?>
<img src="<?php echo $show_beaute['img']; ?>"><br/>
