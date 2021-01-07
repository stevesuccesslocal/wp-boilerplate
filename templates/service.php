<?php

//  Template Name: Service Page

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <?php
    while ( have_posts() ) : the_post(); ?>

      <?php if( get_field('page_builder') ):

        // loop through the rows of data
        while ( has_sub_field('page_builder') ) : ?>

        <?php

          if( get_row_layout() == 'slider'):
          include get_template_directory() . '/inc/page-builder/slider.php';

          elseif( get_row_layout() == 'content'):
          include get_template_directory() . '/inc/page-builder/content.php';

          elseif( get_row_layout() == 'image_banner'):
          include get_template_directory() . '/inc/page-builder/image-banner.php';

          elseif( get_row_layout() == 'map'):
          include get_template_directory() . '/inc/page-builder/map.php';
    
          elseif( get_row_layout() == 'call_to_actions'):
          include get_template_directory() . '/inc/page-builder/call-to-actions.php';
    
          elseif( get_row_layout() == 'callback_form'):
          include get_template_directory() . '/inc/page-builder/callback-form.php';
    
          elseif( get_row_layout() == 'testimonials'):
          include get_template_directory() . '/inc/page-builder/testimonials.php';
    
          elseif( get_row_layout() == 'social_media_buttons'):
          include get_template_directory() . '/inc/page-builder/social.php';
    
          elseif( get_row_layout() == 'why_choose_us'):
          include get_template_directory() . '/inc/page-builder/why-choose-us.php';
    
          elseif( get_row_layout() == 'case_studies'):
          include get_template_directory() . '/inc/page-builder/case-studies.php';
    
          elseif( get_row_layout() == 'carousel'):
          include get_template_directory() . '/inc/page-builder/carousel.php';
    
          elseif( get_row_layout() == 'news'):
          include get_template_directory() . '/inc/page-builder/news.php';
    
          elseif( get_row_layout() == 'content_with_image'):
          include get_template_directory() . '/inc/page-builder/content-with-image.php';
    
          elseif( get_row_layout() == 'content_centred'):
          include get_template_directory() . '/inc/page-builder/content-centred.php';
    
    
          elseif( get_row_layout() == 'list'):
          include get_template_directory() . '/inc/page-builder/list.php';
    
          elseif( get_row_layout() == 'html_css_block'):
          include get_template_directory() . '/inc/page-builder/html-block.php';

          endif;
        ?>

      <?php endwhile; ?>

    <?php endif; ?>
    
  <?php endwhile; ?>


  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer(); ?>