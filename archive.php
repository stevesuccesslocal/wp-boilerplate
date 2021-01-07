<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package success
 */

get_header(); ?>

	<div id="primary" class="pad-bottom-40 content-area bg--lgrey">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<div class="bg--color1 text-center relative pad-top-40 pad-bottom-30">
      <?php single_term_title( '<h1 class="color--white page-title">', '</h1>' ); ?>              
      </div><!-- .page-header -->
      
      <div class="bg--white">
        <div class="container">
          <div class="row pad-top-10 pad-bottom-10 pad-top-5-l pad-bottom-5-l">
            <div class="col-12 col-6-l text-center text-left-l pad-bottom-10 pad-bottom-0-l">
              <?php
              if ( function_exists('yoast_breadcrumb') ) {
              yoast_breadcrumb( '<p class="breadcrumbs no-margin pad-top-5-l">','</p>' );
              }
              ?>
            </div>
            <div class="col-12 col-6-l text-center text-right-l">
              <form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                <?php wp_dropdown_categories( 'show_count=1&hierarchical=1' ); ?>
                <input type="submit" name="submit" class="cat-button" value="Select Categoery" />
              </form>
            </div>
          </div>
        </div>
      </div>
			
		  <div class="container">
            

        <div class="animatedParent row relative pad-top-40" id="photos">

          <?php
          /* Start the Loop */
          while ( have_posts() ) : the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'inc/content', 'gallery-archive');

          endwhile;

          the_posts_navigation();

        else :

          get_template_part( 'template-parts/content', 'none' );

        endif; ?>
        
        </div>
        
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer(); ?>

