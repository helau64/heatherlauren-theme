jQuery(document).ready(function() {
	jQuery("#search-bar").hide ();

	jQuery( ".search-submit" ).click(function() {
		jQuery( "#search-bar" ).toggle('slow');
  });
});