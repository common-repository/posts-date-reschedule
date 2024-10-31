jQuery(document).ready(function($){
	$('#pdr_function').change(function(){
		var selected = $(this).val();
		$('.pdr_function_selector').hide();

		if ( selected == 1 ) {
			$('.pdr_date_selector').show();
		}

		if ( selected == 2 ) {
			$('.pdr_plus_selector').show();
		}

		if ( selected == 3 ) {
			$('.pdr_minus_selector').show();
		}
	});

	//WP Footer
	var wp_thanks = $('#footer-thankyou').html();
	$('#footer-upgrade').prepend(wp_thanks);
	$('#footer-thankyou').html( translate.developed + ' <a href="http://skostadinov.eu">Stoyan Kostadinov</a>' )
});