<?php

//  Template Name: Home

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


	<div class="relative">
        <div class="cycle-slideshow">
          <?php 
          $images = get_field('slider');
          if( $images ): ?>
            <?php foreach( $images as $image ): ?>
                <img src="<?php echo $image['sizes']['slider-home']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endforeach; ?>
          <?php endif; ?>
		</div>
	</div>
		

<?php endwhile; ?>

<?php get_footer(); ?>