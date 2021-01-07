<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package success
 */

get_header(); ?>

	<div id="primary" class="pad-bottom-40 content-area bg--lgrey noslider">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

<div class="page-header text-center bg--darken-color1 pad-top-40 pad-bottom-20">
  	  <h1 class="color--white">Testimonials</h1>
  	</div><!-- .page-header -->


			
			
		<div class="container pad-top-40">
    
    <?php if(get_sub_field('title')):?><p class="fs-1 uppercase color--black font-600 no-margin icon-color1"><?php the_sub_field('title'); ?></p><?php endif; ?>
    <?php if(get_sub_field('content')):?><?php the_sub_field('content'); ?><?php endif; ?>

      <div class="animatedParent row relative pad-top-20">

			<div class="col-12 col-8-l">
      
      		<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>


          <div class="pad-bottom-50 animated fadeInUp" data-id='<?php echo $counter++; ?>'>
            
            <div class="clear block no-decoration bg--white testimonial-quote">
                            
              <div class="block clear pad-20">

								<?php the_content(); ?>
								
								<hr>

								<span class="font-600"><?php the_title(); ?></span>

              </div>

            </div>
            
        </div>

			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div>
		<div class="col-12 col-4-l leave-review">
	
		<div class="bg--color1 color--white color--white relative clear animatedParent animateOnce text-center">

			<div class="animated fadeInRight">

				<div class="pad-20 pad-30-l">

						<?php echo do_shortcode('[gravityform id="3" title="true" description="true" tabindex=76]'); ?>

				</div>

			<!-- close animation div if open -->
			</div>

		</div>


				</div>
		
		</div>
      

    </div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer(); ?>
