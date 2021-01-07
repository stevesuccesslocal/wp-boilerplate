<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This displays the widgets from the default sidebar with fallback content
//  if no widgets exist.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>
<aside>

	<div class="aside__grid">

		<?php if ( is_page('contact-us') || is_page('contact-success') ) :

			//  Retrieves the relevant sidebar for post page.

		include get_template_directory() . '/inc//contact-sidebar.php';

		else :

			//  Retrieves the relevant sidebar if page is the contact page.

			dynamic_sidebar( 'default-sidebar' ); ?>

		<?php endif; ?>

	</div>

</aside>