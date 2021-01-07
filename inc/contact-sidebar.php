<div class="content-right pad-top-20 pad-top-0-l" id="visit-our-showroom">
	  	  
    <div class="area-sidebar loose font-400 text-center">
      <div class="bg--color1 pad-20">

        <?php if(get_field('google_map_iframe')): ?>
          <div class="pad-20 bg--white font2 font-600 fs-5"><i class="fas fa-map-marker-alt"></i> Our <span class="color--color2">Location</span></div>
          <?php the_field('google_map_iframe'); ?>
        <?php endif; ?>


        <div class="bg--white">
          <div class="bg--lgrey pad-15">
             <?php if(get_field('street_name', 'options')) { the_field('street_name', 'options');}?>, 
               <?php if(get_field('town__city', 'options')) {?><?php the_field('town__city', 'options');?><?php }?>, 
               <?php if(get_field('county', 'options')) {?><?php the_field('county', 'options');?><?php }?>, 
               <?php if(get_field('postcode', 'options')) {?><?php the_field('postcode', 'options');?><?php }?>
          </div>
        </div>

        <br>

        <div class="pad-20 bg--white font2 font-600 fs-5"><i class="fas fa-clock"></i> Open <span class="color--color2">Times</span></div>
        <div class="bg--white">
          <div class="bg--lgrey pad-15">
           <?php if ( get_field('opening_times', 'options') ) : ?>
             <?php echo get_field('opening_times', 'options'); ?>
           <?php endif; ?>
          </div>
        </div>

        <br>

        <div class="pad-20 bg--white font2 font-600 fs-5"><i class="fas fa-envelope"></i> Contact <span class="color--color2">Details</span></div>
        <div class="bg--white">
          <div class="bg--lgrey pad-15">

         <?php if(get_field('main_telephone', 'option')){
          $phone_number = get_field('main_telephone', 'option');
          $stripped_number = str_replace(' ', '', $phone_number); ?>
          <span class="tel-nos"><i class="fas fa-phone"></i> <a class="color--color2 no-decoration" href="tel:<?php echo $stripped_number;?>" title="Our Phone Number"><?php echo $phone_number;?></a></span><br>
          <?php };  ?>

          <?php if(get_field('secondary_telephone', 'option')){
              $phone_number = get_field('secondary_telephone', 'option');
              $stripped_number = str_replace(' ', '', $phone_number); ?>
              <span class="tel-nos"><i class="fas fa-phone"></i> <a class="color--color2 no-decoration" href="tel:<?php echo $stripped_number;?>" title="Our Secondary Phone Number"><?php echo $phone_number;?></a></span><br>
          <?php };  ?> 

          </div>
        </div>



        <?php if(get_field('facebook', 'options') || get_field('twitter', 'options') || get_field('pinterest', 'options')|| get_field('linkedin', 'options') || get_field('youtube', 'options') || get_field('instagram', 'options') ): ?>
        <br>

        <div class="pad-20 bg--white font2 font-600 fs-5"><i class="fas fa-share-alt"></i> Social <span class="color--color2">Media</span></div>
        <div class="bg--white">
          <div class="bg--lgrey pad-15">

          <!-- Social Icons -->
          <div class="header-social">
            <?php include get_template_directory() . '/inc/social.php';?>
          </div>

          </div>
        </div>
        <?php endif; ?>

      </div>
    </div>

</div>