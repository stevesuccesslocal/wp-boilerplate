<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package success
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php /* <title><?php wp_title( '|', true, 'right' ); ?></title>*/ ?>
	<meta name="author" content="Success Local Limited">
  
  <?php if(get_field('apple_touch_icon', 'option')): ?>
   <link rel="apple-touch-icon" href="<?php the_field('apple_touch_icon', 'option'); ?>" />
  <?php endif; ?>
   
  <?php if(get_field('favicon', 'option')): ?>
    <link rel="icon" type="image/svg+xml" href="<?php the_field('favicon', 'option'); ?>" />
    <link rel="mask-icon" href="<?php the_field('favicon', 'option'); ?>" color="#ff0000">
  <?php endif; ?>
  <?php if(get_field('favicon_ico', 'option')): ?>
    <link rel="alternate icon" type="image/vnd.microsoft.icon" href="<?php the_field('favicon_ico', 'option'); ?>" />
  <?php endif; ?>
    
  <?php  //  Calls the json function from '_functions/template/json.php'  //
  // boilerplate_json(); ?>
	
	<?php if(get_field('analytics_tracking_code', 'option')):
    the_field('analytics_tracking_code', 'option');
  endif; ?>
  
  <?php if(get_field('google_tag_manager_head_code', 'option')):
    the_field('google_tag_manager_head_code', 'option');
  endif; ?>
  
  <?php if(get_field('additional_css', 'option')): ?>
    <style><?php the_field('additional_css', 'option'); ?></style>
  <?php endif; ?>
  
  <?php if(get_field('additional_js', 'option')): ?>
    <script type="text/javascript"><?php the_field('additional_js', 'option'); ?></script>
  <?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php if ( get_field('fixed_header', 'options') ) : ?>id="<?php echo get_field('fixed_header', 'options'); ?>"<?php endif; ?>>
<?php if(get_field('google_tag_manager_body_code', 'option')):
    the_field('google_tag_manager_body_code', 'option');
  endif; ?>


<?php // If banner is enabled
$activate = get_field('activate_notice', 'options');
$notice_text = get_field('notice_text', 'options');
//$notice_link = get_field('notice_link', 'options');
$notice_bg = get_field('notice_background_colour', 'options');
$notice_text_colour = get_field('notice_text_colour', 'options');
if($activate) { ?>
  <style>
  .notice-banner p, .notice-banner a {color:<?php echo $notice_text_colour;?>}
  </style>
  <div class="notice-banner" style="background:<?php echo $notice_bg;?>;">
  <?php echo $notice_text;?>
  </div>
<?php } ?>

<div id="page" class="site">

<header id="masthead" class="logo-left site-header text-center text-left-m clear <?php if ( get_field('fixed_header', 'options') ) : ?><?php echo get_field('fixed_header', 'options'); ?><?php endif; ?>
">
	
    <div class="shrink-wrap container">
      <div class="row">

        <div class="col-12 col-6-m col-8-l pad-bottom-15 pad-bottom-0-m">

        <div class="header__logo center left-m">

              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">

                <?php $options = get_field('custom_logo', 'option');

                if (get_field('custom_logo', 'option'))

                //  If the logo has been set by the user, use that  //

                { ?>

                  <img class="img-fluid left block" src="<?php echo $options['url']; ?>" alt="<?php bloginfo( 'name' ); ?>" itemprop="logo">

                <?php } else {

                //  If the user has not set a custom logo, use the site name and description instead  //

                ?>

                  <h1 class="site-title" itemprop="logo"><?php bloginfo( 'name' ); ?></h1>
                  <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

                <?php } ?>

              </a>

            </div>

          </div>

        <div class="col-12 col-6-m col-4-l text-right-m">
          
           <?php if(get_field('main_telephone', 'option')){
                $phone_number = get_field('main_telephone', 'option');
                $stripped_number = str_replace(' ', '', $phone_number); ?>
                <span class="tel-nos block fs-3 font-500 color--color1 block clear">
                  <i class="fas fa-phone"></i> <a class="color--color1 no-decoration" href="tel:<?php echo $stripped_number;?>" onclick="ga('send', 'event', 'link', 'click', 'Header main number');"><?php echo $phone_number;?></a></span>
            <?php };  ?>
            
            <?php if(get_field('secondary_telephone', 'option')){
                $phone_number = get_field('secondary_telephone', 'option');
                $stripped_number = str_replace(' ', '', $phone_number); ?>
                <span class="tel-nos block fs-3 font-600 color--color1"><i class="fas fa-phone"></i> <a class="color--color1 no-decoration" href="tel:<?php echo $stripped_number;?>" onclick="ga('send', 'event', 'link', 'click', 'Header second number');"><?php echo $phone_number;?></a></span>
            <?php };  ?>
          
          
        </div>

      </div>
    </div>

    <div class="relative">

    <?php echo do_shortcode('[nav_jhac_full]'); ?>
    

  </div>

  </header><!-- #masthead -->

<div id="content" class="site-content">
