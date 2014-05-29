$(document).ready(function(){
	$('#formBeaute').on('submit', function(){
		var title = $('#title').val();
        var description = $('#description').val();
        var photo = $('#photo').val();
        var photo2 = $('#photo2').val();
	if(title == "" || description == "" || photo == "" || photo2 == ""){
		alert('Des champs sont incomplets');
	} else{
		$.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') { 
                        alert('Image ajoutée.');
                        window.setTimeout("location=('?appli=admin&action=beaute');");
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
		
	});
});