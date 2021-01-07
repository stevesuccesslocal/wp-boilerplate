<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package success
 */

?>

<article id="post-<?php the_ID(); ?>">


  <div class="bg--color1">
    <div class="single-header entry-header text-center col-8-l center pad-40">

      <?php
      if ( is_singular() ) :
        the_title( '<h1 class="entry-title color--white">', '</h1>' );
      else :
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      endif;

      if ( 'post' === get_post_type() ) : ?>
      <div class="entry-meta color--white">
      <?php echo get_the_date( 'd-m-Y' ); ?>
      </div><!-- .entry-meta -->
      <?php
      endif; ?>
    </div><!-- .entry-header -->
  </div>


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


<div class="bg--lgrey">
  <div class="container pad-top-40">
    <div class="row pad-bottom-30">

      <div class="col-12 col-7-l right-l pad-bottom-40 pad-bottom-0-l">
          <div class="entry-content">
            <?php
              the_content( sprintf(
                wp_kses(
                  /* translators: %s: Name of current post. Only visible to screen readers */
                  __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'success' ),
                  array(
                    'span' => array(
                      'class' => array(),
                    ),
                  )
                ),
                get_the_title()
              ) );

              wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'success' ),
                'after'  => '</div>',
              ) );
            ?>
          </div><!-- .entry-content -->

        <div class="entry-footer font-600">
          <?php success_entry_footer(); ?>
        </div><!-- .entry-footer -->
      </div>

      <div class="col-12 col-5-l col-4-xl">
        <div class="block clear pad-bottom-20">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('preview', ['class' => 'block clear']);
          } else { ?>
              <?php $fallback = get_field('no_featured_image_news', 'options'); ?>
              <img src="<?php echo $fallback['sizes']['preview']; ?>" class="attachment-post-thumbnail" alt="<?php the_title(); ?>" />
          <?php } ?>
        </div>
            
        <?php get_sidebar(); ?>
      </div>


      </div>
    </div>
</div>

</article><!-- #post-<?php the_ID(); ?> -->
