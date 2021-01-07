<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package success
 */

get_header(); ?>

<section id="primary" class="content-area">
  <main id="main" class="site-main">

    <?php
    while ( have_posts() ) : the_post(); ?>

      <div class="container">
        <div class="row">
          <div class="col-12 col-8-l">
            <?php the_content(); ?>
          </div>
          <div class="col-12 col-4-l">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    
  <?php endwhile; ?>


  </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
