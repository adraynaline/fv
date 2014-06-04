</div>
<script src="assets/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
 <script type="text/javascript"> $('.item').first().addClass('active');</script>
<script type="text/javascript">
	$('#choicefor').find('p').first().addClass('choiceactive');
	$('#forhim').hide();
	var himclick = $('#choicefor').find('p').last();
	var herclick = $('#choicefor').find('p').first();
	himclick.on('click',function(){
		$('#choicefor').find('p').first().removeClass('choiceactive');
		$('#choicefor').find('p').first().css('background','white',
												'color','black');

		$(this).addClass('choiceactive');
		$('#forhim').slideDown();
		$('#forher').slideUp(function(){
			$('#forher').hide();
		});
		
	});
	herclick.on('click',function(){
		$('#choicefor').find('p').last().removeClass('choiceactive');
		$(this).addClass('choiceactive');
		$('#choicefor').find('p').first().css('background','black',
												'color','white');
		
		$('#forher').slideDown();
		$('#forhim').slideUp(function(){
			$(this).hide();
		});
		
		
	});
</script>
</body>
</html>