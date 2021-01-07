<?php

//  Template Name: Area

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <section class="pad-top-40 pad-bottom-40">
  	<div class="container">  
  		<div class="row">  
          <div class="col-12 col-8-l">
            
           <div class="cycle-slideshow">
              <?php 
              $images = get_field('slider');
              if( $images ): ?>
                <?php foreach( $images as $image ): ?>
                    <img src="<?php echo $image['sizes']['slider-home']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
            
            <div class="block clear text-center font-600 color--white">
              <?php if(get_field('cta_first')): ?>
                <div class="col-6 bg--color1 pad-20"><i class="fas fa-check-circle"></i> <?php the_field('cta_first'); ?></div>
              <?php endif; ?>
              <?php if(get_field('cta_second')): ?>
                <div class="col-6 bg--color2 pad-20"><i class="fas fa-check-circle"></i> <?php the_field('cta_second'); ?></div>
              <?php endif; ?>
            </div>
            
            <div class="pad-top-40 block clear">
            
              <?php // the_title( '<h1>', '</h1>' ); ?>
              <?php the_content(); ?>
              <a class="button color--white bg--color2" href="/contact-us">Get in touch</a>
              
            </div>
            
            </div>
            <div class="col-12 col-4-l area-sidebar">
              <div class="bg--color1 pad-20">
                
                <?php if(get_field('google_map_iframe')): ?>
                  <div class="pad-20 bg--white font2 font-600"><i class="fas fa-map-marker-alt"></i> Our <span class="color--color1">Coverage</span></div><hr class="nomargin">
                  <?php the_field('google_map_iframe'); ?>
                  <br>
                <?php endif; ?>
                
                
                <div class="pad-20 bg--white font2 font-600"><i class="fas fa-map-marker-alt"></i> Our <span class="color--color1">Location</span></div><hr class="nomargin">
                <div class="pad-5 bg--white">
                  <div class="bg--lgrey pad-15">
                     <?php if(get_field('street_name', 'options')) { the_field('street_name', 'options');}?><br>
                       <?php if(get_field('town__city', 'options')) {?><?php the_field('town__city', 'options');?><?php }?><br>
                       <?php if(get_field('county', 'options')) {?><?php the_field('county', 'options');?><?php }?><br>
                       <?php if(get_field('postcode', 'options')) {?><?php the_field('postcode', 'options');?><?php }?>
                  </div>
                </div>
                
                <br>
                
                <div class="pad-20 bg--white font2 font-600"><i class="fas fa-clock"></i> Open <span class="color--color1">Times</span></div><hr class="nomargin">
                <div class="pad-5 bg--white">
                  <div class="bg--lgrey pad-15">
                    <?php if ( get_field('opening_times', 'options') ) : ?>
                      <?php echo get_field('opening_times', 'options'); ?>
                    <?php endif; ?>
                    
                  </div>
                </div>
                
                <br>
                
                <div class="pad-20 bg--white font2 font-600"><i class="fas fa-quote-right"></i> Get <span class="color--color1">In Touch</span></div><hr class="nomargin">
                <div class="pad-5 bg--white">
                  <div class="bg--lgrey pad-15">
                     <p>Please feel free to contact our team.</p>
                    <a class="button color--white bg--color2" href="/contact-us">Contact Form</a>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
		</div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>