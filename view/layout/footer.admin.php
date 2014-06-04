<script src="assets/jquery/jquery.min.js"></script>
<script src="assets/ajax/update_beaute.js"></script>
<script src="assets/ajax/add_issue.js"></script>
<script src="assets/ajax/add_beaute.js"></script>
<script src="assets/ajax/add.delete.product.js"></script>
<script src="assets/ajax/add_pub.js"></script>
<script src="assets/ajax/change_pub.js"></script>
<script src="assets/ajax/delete_beaute.js"></script>
<script src="assets/ajax/delete_homeslider.js"></script>
<script src="assets/jquery/jquery.liteuploader.min.js"></script>
<script src="assets/jquery/upload_img.js"></script>
<script src="assets/jquery/tinymce.min.js"></script>
<script src="assets/ajax/activate.desactivate.img.js"></script>
<script src="assets/jquery/jquery.form.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jquery/jquery.pageslide.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste moxiemanager"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
<script type="text/javascript">
var email = $('#mail');
function verif_mail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 
$('#comingsoon').mouseenter(function(){
	$(this).hide();
	$('#comingsoon2').slideDown();
});

$(document).ready(function(){
if ($(window).width() < 209) {
$("#comingsoon p").css('font-size','1em');
}
});

$('#menu').on('click',function(){
  		$('#modal').slideToggle();
  	});
		$('#second_step_modele').slideToggle();
		$('#next_step').on('click',function(){
			$('#first_step_modele').slideToggle();
			$('#second_step_modele').slideToggle();
		});
		$('#previous_step').on('click',function(){
			$('#first_step_modele').slideToggle();
			$('#second_step_modele').slideToggle();
		});
$('#beaute_inactif').show();
$('#beaute_actif').hide();
$('#actif').on('click',function(){
	$('#beaute_actif').show();
	$('#beaute_inactif').hide();
});	
$('#inactif').on('click',function(){
	$('#beaute_actif').hide();
	$('#beaute_inactif').show();
});	 
$('#closeerrorcoming').on('click',function(){
	$('#error').fadeOut();
});
$('.item').first().addClass('active'); 
$('.item2').first().addClass('active'); 

  	//$(".second").pageslide({ direction: "left", modal: true });
  	

  
$(document).ready(function() { 
	var options = { 
			target:   '#output',   // target element(s) to be updated with server response 
			beforeSubmit:  beforeSubmit,  // pre-submit callback 
			success:       afterSuccess,  // post-submit callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
	 $('#MyUploadForm').submit(function() { 
			$(this).ajaxSubmit(options);  			
			// always return false to prevent standard browser submit and page navigation 
			return false; 
		}); 
}); 

</script>
<?php if($_GET['action'] != 'beaute'){ ?>
<script>
function afterSuccess()
{
	$('#submit-btn').show(); //hide submit button
	$('#loading-img').hide(); //hide submit button
	var img = $('#img').attr('src');
	var min_img = $('#min_img_modele').attr('src');
	$('#photo').val(img);
	$('#photo_2').val(min_img);

}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		
		if( !$('#imageInput').val()) //check empty input filed
		{
			$("#output").html("Are you kidding me?");
			return false
		}
		
		var fsize = $('#imageInput')[0].files[0].size; //get file size
		var ftype = $('#imageInput')[0].files[0].type; // get file type
		

		//allow only valid image file types 
		switch(ftype)
        {
            case 'image/png': case 'image/gif': case 'image/jpeg': case 'image/pjpeg':
                break;
            default:
                $("#output").html("<b>"+ftype+"</b> Unsupported file type!");
				return false
        }
		
		//Allowed file size is less than 1 MB (1048576)
		if(fsize>1048576) 
		{
			$("#output").html("<b>"+bytesToSize(fsize) +"</b> Too big Image file! <br />Please reduce the size of your photo using an image editor.");
			return false
		}
				
		$('#submit-btn').hide(); //hide submit button
		$('#loading-img').show(); //hide submit button
		$("#output").html("");  
	}
	else
	{
		//Output error to older unsupported browsers that doesn't support HTML5 File API
		$("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

</script>
<?php } else { ?>
	<script>
function afterSuccess()
{
	$('#submit-btn').show(); //hide submit button
	$('#loading-img').hide(); //hide submit button
	var photo = $('#ph').attr('src');
	var photo2 = $('#ph2').attr('src');
	$('#photo').val(photo);
	$('#photo2').val(photo2);


}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		
		if( !$('#imageInput').val()) //check empty input filed
		{
			$("#output").html("Are you kidding me?");
			return false
		}
		
		var fsize = $('#imageInput')[0].files[0].size; //get file size
		var ftype = $('#imageInput')[0].files[0].type; // get file type
		

		//allow only valid image file types 
		switch(ftype)
        {
            case 'image/png': case 'image/gif': case 'image/jpeg': case 'image/pjpeg':
                break;
            default:
                $("#output").html("<b>"+ftype+"</b> Unsupported file type!");
				return false
        }
		
		//Allowed file size is less than 1 MB (1048576)
		if(fsize>1048576) 
		{
			$("#output").html("<b>"+bytesToSize(fsize) +"</b> Too big Image file! <br />Please reduce the size of your photo using an image editor.");
			return false
		}
				
		$('#submit-btn').hide(); //hide submit button
		$('#loading-img').show(); //hide submit button
		$("#output").html("");  
	}
	else
	{
		//Output error to older unsupported browsers that doesn't support HTML5 File API
		$("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

</script>
<?php } ?>

</script>
</body>
</html>