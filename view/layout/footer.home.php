</div>
<script src="assets/jquery/jquery.min.js"></script>
<script src="assets/jquery/jquery.pageslide.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script src="assets/jquery/imgLiquid.min.js"></script>
 <script type="text/javascript"> $('.item').first().addClass('active');</script>
 <script>
    $(".second").pageslide({ direction: "left", modal: true });
</script>
<script type="text/javascript">
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 $('#header_pc').hide();
	$('#header_mobil').show();
}
else {
	$('#header_pc').show();
	$('#header_mobil').hide();
}

	$(document).ready(function() {
    $(".imgLiquidFill").imgLiquid();
});
	
	$('#forhim').hide();
	$('#forher').hide();
	var himclick = $('#menufor p').last();
	var herclick = $('#menufor p').first();
	$(document).ready(function() {
	himclick.on('click',function(){
		$(himclick).css('background','black');
		$(himclick).css('color','white');
		$(herclick).css('background','none');
		$(herclick).css('color','black');
		$('#menufor span').last().show();
		$('#menufor span').first().hide();
		$('#forhim').slideDown();
		$('#forher').slideUp(function(){
			$('#forher').hide();
		});
		
	});

	herclick.on('click',function(){
		$(herclick).css('background','black');
		$(herclick).css('color','white');
		$(himclick).css('background','none');
		$(himclick).css('color','black');
		$('#menufor span').first().show();
		$('#menufor span').last().hide();
		$('#forher').slideDown();
		$('#forhim').slideUp(function(){
			$(this).hide();
		});
		
		
	});
});	
	$('#redlips').on('click',function(){
		$('#hover_content').fadeOut(function(){
			$('#menufor').fadeIn();
			$('#menufor p').first().addClass('menufor1');
			$('#menufor span').first().show();
			$('#forher').show();
		});
	});
	$('#perfum').on('click',function(){
		$('#hover_content').fadeOut(function(){
			$('#menufor').fadeIn();
			$('#menufor p').last().addClass('menufor1');
			$('#menufor span').last().show();
			$('#forhim').show();
		});
	});
</script>
</body>
</html>