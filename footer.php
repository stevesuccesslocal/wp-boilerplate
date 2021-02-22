<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package success
 */

?>

	</div><!-- #content -->

<?php $companyname = get_bloginfo( 'name' ); ?>

<footer id="colophon" class="site-footer pad-bottom-40 text-center">
  <div class="bg--lgrey pad-top-20 pad-bottom-20 text-center">
    <?php
      wp_nav_menu( array(
        'theme_location'  => 'footer-menu',
      ) );
    ?>
  </div>
  <div class="container pad-top-20">
      
    <p class="font2 font-600 no-margin">
        <?php if(get_field('street_name', 'options')) {?><?php the_field('street_name', 'options');?>,<?php }?>
         <?php if(get_field('town__city', 'options')) {?><?php the_field('town__city', 'options');?>,<?php }?>
         <?php if(get_field('county', 'options')) {?><?php the_field('county', 'options');?>,<?php }?>
         <?php if(get_field('postcode', 'options')) {?><?php the_field('postcode', 'options');?><?php }?>
    </p>

      <?php if(get_field('main_telephone', 'option')){
            $phone_number = get_field('main_telephone', 'option');
            $stripped_number = str_replace(' ', '', $phone_number); ?>
            <i class="fas fa-phone"></i> <a class="inline-block pad-5 font-600 fs-3" href="tel:<?php echo $stripped_number;?>" onclick="ga('send', 'event', 'link', 'click', 'Header main number');"><?php echo $phone_number;?></a>
        <?php } ?>

        <?php if(get_field('secondary_telephone', 'option')){
            $phone_number = get_field('secondary_telephone', 'option');
            $stripped_number = str_replace(' ', '', $phone_number); ?>
            <i class="fas fa-phone"></i> <a class="inline-block pad-5 font-600 fs-3" href="tel:<?php echo $stripped_number;?>" onclick="ga('send', 'event', 'link', 'click', 'Header second number');"><?php echo $phone_number;?></a>
        <?php } ?>
 

        <p class="font2 pad-top-20">
         
          &copy; <?php echo date( 'Y' );?> <?php echo $companyname;?> - All Rights Reserved<br>
           <?php if(get_field('company_number','option')) {?>
           Registered in England No. <?php the_field('company_number','options'); ?> | 
         <?php } ?>
         <?php if(get_field('vat_number','option')) {?>
           VAT No. <?php the_field('vat_number','options'); ?> | 
         <?php } ?>
          Website and Marketing by Success Local Limited test
              
         </p>

  </div>

  <?php if ( get_field('message_box', 'options') ) : ?>
    <a href="<?php the_field('message_link', 'options'); ?>" class="message-box">
      <?php if ( get_field('message_icon', 'options') ) : ?><?php echo get_field('message_icon', 'options'); ?><?php endif; ?>
      <?php if ( get_field('message_text', 'options') ) : ?><?php echo get_field('message_text', 'options'); ?><?php endif; ?>
    </a>

  <?php endif; ?>
  
  
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">

</footer>

<!-- #page -->
<?php wp_footer(); ?>
</body></html>