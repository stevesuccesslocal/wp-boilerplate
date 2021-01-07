<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package success
 */

get_header(); ?>

	<div id="primary" class="bg--lgrey clear pad-bottom-40 content-area">
		<main id="main" class="site-main">
		
      <?php
      while ( have_posts() ) : the_post(); ?>

      <div class="text-center bg--darken-color1 pad-30 pad-50-l"><h1 class="color--white no-margin"><?php the_title(); ?></h1></div>

        
      <div class="block clear">

            <div class="pad-5 animatedParent animateOnce" data-sequence='300'>

            <?php 

            $images = get_field('image_gallery');

            if( $images ): 
            $count = 1; ?>
                    <?php foreach( $images as $image ): ?>
                    <div class="col-12 col-4-m no-padding animated fadeIn" data-id='<?php echo $count++; ?>'>
                    <a class="left cs-gallery litebox" data-litebox-group="gallery" href="<?php echo $image['url']; ?>"  class="litebox relative litebox-screen"><i class="lightbox-expand fas fa-expand-arrows-alt"></i><img class="block pad-5" src="<?php echo $image['sizes']['preview']; ?>" alt="<?php the_title(); ?>"></a>
                    </div>
                    <?php endforeach; ?>
            <?php endif; ?>



            </div>
            </div>

          <div class="pad-10">
            <div class="row animatedParent animateOnce pad-top-40">
              <?php if ( get_field('the_client') ) : ?>
                <div class="col-12 col-3-l pad-bottom-20 animated fadeInLeft">
                  <div class="bg--color2 color--white pad-30">
                    <h2 class="color--white">The Client</h2>
                    <hr>
                    <?php if ( get_field('client_logo') ) : $image = get_field('client_logo'); ?>
                    
                      <!-- Full size image -->
                      <img class="pad-bottom-10" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    
                    <?php endif; ?>
                    
                    <?php echo get_field('the_client'); ?>
                  </div>
                </div>
              <?php endif; ?>
              <?php if ( get_field('case_study_content') ) : ?>
                <div class="col-12 col-9-l pad-bottom-20  animated fadeInRight">
                  <div class="bg--white pad-20 pad-40-l">
                    <h2 class="color--color1">The Case Study</h2>
                    <hr>
                    <?php echo get_field('case_study_content'); ?>
                  </div>
                </div>
              <?php endif; ?>
            </div>

          </div>


          </div>


          <div id="callback" class="bg--color1 color--white relative clear animatedParent animateOnce pad-top-60 pad-bottom-60 text-center">

          <?php if(get_sub_field('animation')):?>
            <div class="<?php the_sub_field('animation'); ?> <?php if(get_sub_field('animation_speed')): the_sub_field('animation_speed'); endif; ?> <?php if(get_sub_field('animation_delay')): the_sub_field('animation_delay'); endif; ?>">
          <?php endif; ?>

              <div class="container">

                <div class="pad-bottom-20 pad-bottom-0-l">
                  <?php echo do_shortcode('[gravityform id="2" title="true" description="true" tabindex=76]'); ?>
                </div>

              </div>

            <!-- close animation div if open -->
            <?php if(get_sub_field('animation')):?> 
              </div>
            <?php endif; ?>

        </div>
                  


      <?php endwhile; // End of the loop.
      ?>
      

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
