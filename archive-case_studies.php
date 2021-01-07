<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package success
 */

get_header(); ?>

	<div id="primary" class="pad-bottom-40 content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

<div class="page-header text-center bg--darken-color1 pad-top-40 pad-bottom-20">
  	  <h1 class="color--white">Case Studies</h1>
  	</div><!-- .page-header -->


			
			
		<div class="container pad-top-40">
    
    <?php if(get_sub_field('title')):?><p class="fs-1 uppercase color--black font-600 no-margin icon-color1"><?php the_sub_field('title'); ?></p><?php endif; ?>
    <?php if(get_sub_field('content')):?><?php the_sub_field('content'); ?><?php endif; ?>

      <div class="animatedParent row relative pad-top-20">
      
      			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>


          <div class="pad-bottom-30 pad-bottom-60 col-12 same-height animated fadeInUp" data-id='<?php echo $counter++; ?>'>
            
            <a href="<?php the_permalink(); ?>" class="relative hover-fade clear block no-decoration">
              
            <div class="post-img block clear">

            <?php

              if ( has_post_thumbnail() ) {
                the_post_thumbnail('cs-preview');
                } else if( get_field('image_gallery') ) {

                $images = get_field('image_gallery');

                $i = 1;

                 if( $images ): ?>
                        <?php foreach( $images as $image ): 
                        if ($i == 1) { ?>

                        <div class="clear relative">
                            
                            <?php /* if( get_field('prices') ): ?>
                              <span class="font-small pad-5 bg--color2 color--white"><i class="fa fa-map-marker" aria-hidden="true"></i> <b><?php the_field('prices'); ?></b></span>
                            <?php endif; */ ?>

                            <img src="<?php echo $image['sizes']['cs-preview']; ?>" alt="<?php the_title(); ?>">

                        </div>

                        <?php $i++; ?>

                    <?php }; break; endforeach;  endif;
                        
                  };

                ?>

            </div>


              <div class="block clear pad-top-20 pad-20-l color--dgrey cs-preview">

                <p class="color--color1 font-800 font-2 fs-4 no-margin pad-bottom-5 uppercase"><?php the_title(); ?></p>

                <?php if ( get_field('the_client') ) : ?>
                  <div class="fs-6"><?php echo get_field('the_client'); ?></div>
                <?php endif; ?>

                <div class="cs-button" href="<?php the_permalink(); ?>">Read the Case Study</div>
                
              </div>



            </a>
            
        </div>


      
			

			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		
		</div>
      

    </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer(); ?>
