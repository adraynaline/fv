$(document).ready(function(){
    $('#formAddContentArticle').on('submit', function(){
        var id = $('#id_article').val();
        //var textarea = $('#tinyeditor').val();
    if(id == "" ){
        alert('Des champs sont incomplets'+textarea+' +'+id+' ');
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