<?php
//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Register sidebar (widget areas) for our theme.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

function hobbes_widgets_init() {
  
  register_sidebar( 
    array(
      'name'          => __( 'Default Sidebar', 'hobbes' ),
      'id'            => 'default-sidebar',
      'description'   => '',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<p class="widget__title">',
      'after_title'   => '</p>'
    )
  );
  
  register_sidebar( 
    array(
      'name'          => __( 'Secondary Sidebar', 'hobbes' ),
      'id'            => 'secondary-sidebar',
      'description'   => '',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<p class="widget__title">',
      'after_title'   => '</p>'
    )
  );
	
	register_sidebar( 
    array(
      'name'          => __( 'News Sidebar', 'hobbes' ),
      'id'            => 'news-sidebar',
      'description'   => 'This will appear on the posts and archive pages',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<p class="widget__title">',
      'after_title'   => '</p>'
    )
  );
  
  register_sidebar( 
    array(
      'name'          => __( 'Contact Sidebar', 'hobbes' ),
      'id'            => 'contact-sidebar',
      'description'   => 'Add the customer contact widget to load details from the options page.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<p class="widget__title">',
      'after_title'   => '</p>'
    )
  );
  
  //  Add additional sidebars here  //
}

add_action( 'widgets_init', 'hobbes_widgets_init' );