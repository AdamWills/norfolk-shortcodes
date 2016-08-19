(function( $ ) {
	'use strict';
	 $(function() {
		 // a-z directory mobile dropdown nav
		 $('select.az_directory').on('change', function() {
			 if ($(this).val()) {
				 $(document).scrollTop( $("#" + $(this).val()).offset().top );
			 }
		 });

	 });

})( jQuery );
