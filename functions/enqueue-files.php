<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Equeues theme scripts and stylesheets to wp_head.
//
//  NB. Because our theme does not use the default 'styles.css' file, our
//  global stylesheet (/build/css/global.css) must be enqueued here.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

function enqueue_files() {
  //  Register jQuery from Google Libraries, not locally
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js', false);
  
  //  Register Global files  //
  wp_register_script( 'add-global-scripts', get_template_directory_uri() . '/js/min/scripts-min.js', '', null,'false'  );
  wp_register_style( 'add-global-styles', get_template_directory_uri() . '/style.css', '', null,''  );
  

  //  Register Additional Scripts  //
  wp_register_script( 'add-cookies-scripts', get_template_directory_uri() . '/js/min/cookies-min.js', '', null,''  );
  wp_register_script( 'add-cycle2-scripts', get_template_directory_uri() . '/js/min/cycle2-min.js', '', null,''  );
  wp_register_script( 'add-animation-scripts', get_template_directory_uri() . '/js/min/css3-animate-it-min.js', '', null,'true'  );
  wp_register_script( 'add-slick-carousel-scripts', get_template_directory_uri() . '/js/min/slick-min.js', '', null,''  );
  wp_register_script( 'add-owl-carousel-scripts', get_template_directory_uri() . '/js/min/owl.carousel-min.js', '', null,''  );

  


  //  Enqueue Global Scripts  //
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'add-global-scripts' );
  wp_enqueue_style( 'add-global-styles' );
  
  //  Enqueue Scripts  //
  wp_enqueue_script('add-cycle2-scripts');
  wp_enqueue_script('add-animation-scripts');
  wp_enqueue_script('add-cookies-scripts');
  // wp_enqueue_script('add-slick-carousel-scripts');
  // wp_enqueue_script('add-owl-carousel-scripts');
  

}
add_action( 'wp_enqueue_scripts', 'enqueue_files' );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Scripts used for adding support for older browers should not be enqueued
//  as normal. Instead they are added to wp_head below.


function boilerplate_html5shiv() {
  
  echo '<!--[if lt IE 9]>';
  echo '<script src="'. get_template_directory_uri() .'/js/default.min.js"></script>';
  echo '<script src="'. get_template_directory_uri() .'/css/animations-ie-fix.css"></script>';
  echo '<![endif]-->';
  
}
add_action('wp_head', 'boilerplate_html5shiv');