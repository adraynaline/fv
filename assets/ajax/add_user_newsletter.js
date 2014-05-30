$(document).ready(function(){
	$('#formNewsletter').on('submit', function(){
		var mail = $('#mail').val();
        
	if(mail == ""){
		$('#errorcoming').empty();
        $('#errorcoming').append('Enter your email');
        $('#error').css('background','red');
        $('#error').fadeIn();
        $('#error').delay(1500).fadeOut();
	} else{
		$.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') { 
                        $('#errorcoming').empty();
                        $('#errorcoming').append('Added !');
                        $('#error').css('background','green');
                        $('#error').css('color','white');
                        $('#error').fadeIn();
                        $('#error').delay(1500).fadeOut();
                        $('#mail').val('');
                    } else {
                        $('#errorcoming').empty();
                        $('#errorcoming').append('Email already added!');
                        $('#error').css('background','red');
                        $('#error').fadeIn();
                        $('#error').delay(1500).fadeOut();
                        $('#mail').val('');
                    }
                }
            });
        }
        return false;
		
	});
});
function isEmail(email)
{
     if ( ( email.indexOf("@") == -1 ) 
       || ( email.indexOf("@") == 0 ) 
       || ( email.indexOf("@") != email.lastIndexOf("@") ) 
       || ( email.indexOf(".") == email.indexOf("@") - 1 ) 
       || ( email.indexOf(".") == email.indexOf("@") + 1 ) 
       || ( email.indexOf("@") == email.length -1 ) 
       || ( email.indexOf (".") == - 1 ) 
       || ( email.lastIndexOf (".") == email.length - 1 ) )
         return false;
      else
         return true;
}