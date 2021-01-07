<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package success
 */

?>
	
<article id="post-<?php the_ID(); ?>" class="pad-bottom-30 col-12 col-6-m col-4-l animated fadeInUp post-item" data-id='<?php echo $counter++; ?>'>
            
      <a href="<?php the_permalink(); ?>" class="clear block no-decoration">
        
        <div class="post-img block clear">
        
        <div class="clear relative">
                      
            <?php

            if ( has_post_thumbnail() ) {
            the_post_thumbnail('preview');
            } else { ?>
                <?php $fallback = get_field('no_featured_image_news', 'options'); ?>
                <img src="<?php echo $fallback['sizes']['preview']; ?>" class="attachment-post-thumbnail" alt="<?php the_title(); ?>" />

              <?php }

            ?>
          </div>
        
        </div>

        <div class="bg--white news-box pad-20 same-height">
          <i class="fas fa-clock"></i> <span class="font-600"><?php echo get_the_date(); ?></span><br>
          <b class="fs-3 color--black pad-bottom-10 block clear"><?php the_title(); ?></b>
          <hr class="bg--color1">
          <span class="block color--dgrey pad-top-15"><?php the_excerpt(); ?></span>
          <a class="button" href="<?php the_permalink(); ?>">Read this post</a>
        </div>


      </a>
            
	
<?php /*
	<div class="bg--lgrey pad-10 entry-footer">
		<?php success_entry_footer(); ?>
  </div><!-- .entry-footer -->
  */ ?>
</article><!-- #post-<?php the_ID(); ?> -->
