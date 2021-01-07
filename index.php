<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the main template file. It is used to display a page if nothing
//  more specific matches a query. It puts together the home page where no
//  'home.php' template exists.
//
//  Learn more: http://codex.wordpress.org/Template_Hierarchy

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<section class="bg--color1 text-center relative pad-top-40 pad-bottom-30"> 
	<div class="container"> 
		<div class="center-m">
			<h1 class="page-title text-center color--white text-left">Blog</h1>
		</div>
	</div>
</section>

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


	<div id="primary" class="bg--lgrey pad-top-40 pad-bottom-40 content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			
    <div class="container">

      <div class="animatedParent row relative pad-top-20 post-wrap">


					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php

						//  Retrieves the relevant format for the template. Post format parts
						//  can be found within the '_partials' folder.

						get_template_part( 'inc/content', get_post_format() ); ?>

					<?php endwhile; ?>

					<div class="post-navigation col-12 block clear">

						<?php

						//  Calls the pagenation function from '_default/template-tags.php'

						the_posts_navigation(); ?>

					</div>

					<?php else : ?>

						<?php get_template_part( 'inc/content', 'none' ); ?>
					<?php endif; ?>

        </div>
        
      </div>
      
    <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	  

<?php get_footer(); ?>