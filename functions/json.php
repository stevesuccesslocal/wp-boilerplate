<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that calls the company information which is outputted via 'json',
//  including address, opening times, and phone number.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'boilerplate_json' ) ) :

function boilerplate_json() { ?>
  
  <script type="application/ld+json"> 
    {
      "@context": "http://schema.org",
      "@type": "<?php if(get_field('schema_type', 'option')) {  the_field('schema_type', 'option');  } ?>",
      
      "legalName": "<?php if(get_field('full_company_name', 'option')): the_field('full_company_name', 'option'); else: bloginfo( 'name' ); endif; ?>",
      
      "url": "<?php echo site_url(); ?>",
      
      <?php
      //  Logo  //
      if(get_field('custom_logo', 'option')) {
        $logo = get_field('custom_logo', 'option');
        echo'"logo": "'. $logo['url'] .'",';
      } ?>
      "address": {
        "@type": "PostalAddress",
        <?php
        // Address Line 1 //
        if(get_field('street_name', 'option')) {
        echo'"streetAddress": "'. get_field('street_name', 'option') .'",';
        }; ?>
        <?php
        //  Town/City  //
        if(get_field('town__city', 'option')) {
        echo'"addressLocality": "'. get_field('town__city', 'option') .'",';
        }; ?>
        <?php
        // County //
        if(get_field('county', 'option')) {
        echo'"addressRegion": "'. get_field('county', 'option') .'",';
        }; ?>
        <?php
        // Post Code //
        if(get_field('postcode', 'option')) {
        echo'"postalCode": "'. get_field('postcode', 'option') .'"';
        }; ?>
      },
      <?php
        // Post Code //
        if(get_field('main_telephone', 'option')) {
        echo'"telephone": "'. get_field('main_telephone', 'option') .'"';
        }; ?>,
      <?php
        // Post Code //
        if(get_field('company_email', 'option')) {
        echo'"email": "'. get_field('company_email', 'option') .'"';
        }; ?>,
      "openingHours": [
        <?php
          // vars
          $mon = get_field('monday', 'option');	
          if($mon['open__closed'] == 'Open' ): ?>
            "Mo <?php echo $mon['open_time']; ?>-<?php echo $mon['closed_time']; ?>",
          <?php endif; ?>

          <?php
          // vars
          $tue = get_field('tuesday', 'option');	
          if($tue['open__closed'] == 'Open' ): ?>
            "Tu <?php echo $tue['open_time']; ?>-<?php echo $tue['closed_time']; ?>",
          <?php endif; ?>

          <?php
          // vars
          $wed = get_field('wednesday', 'option');	
          if($wed['open__closed'] == 'Open' ): ?>
            "We <?php echo $wed['open_time']; ?>-<?php echo $wed['closed_time']; ?>",
          <?php endif; ?>

          <?php
          // vars
          $thur = get_field('thursday', 'option');	
          if($thur['open__closed'] == 'Open' ): ?>
            "Th <?php echo $thur['open_time']; ?>-<?php echo $thur['closed_time']; ?>",
          <?php endif; ?>

          <?php
          // vars
          $fri = get_field('friday', 'option');	
          if($fri['open__closed'] == 'Open' ): ?>
            "Fr <?php echo $fri['open_time']; ?>-<?php echo $fri['closed_time']; ?>",
          <?php endif; ?>

          <?php
          // vars
          $sat = get_field('saturday', 'option');	
          if($sat['open__closed'] == 'Open' ): ?>
            "Sa <?php echo $sat['open_time']; ?>-<?php echo $sat['closed_time']; ?>",
          <?php endif; ?>

          <?php
          // vars
          $sun = get_field('sunday', 'option');	
          if($sun['open__closed'] == 'Open' ): ?>
            "Su <?php echo $sun['open_time']; ?>-<?php echo $sun['closed_time']; ?>"
          <?php endif; ?>
      ],

      "sameAs": [
        <?php
        //  Google+ Link  //
        if(get_field('google+', 'option')) {
          echo '"'. get_field('google+', 'option') .'",';
        }; ?>
        <?php
        //  Twitter Link  //
        if(get_field('twitter', 'option')) {
          echo '"'. get_field('twitter', 'option') .'",';
        }; ?>
        <?php
        //  Facebook link  //
        if(get_field('facebook', 'option')) {
          echo '"'. get_field('facebook', 'option') .'",';
        }; ?>
        <?php
        //  Linkedin link  //
        if(get_field('linkedin', 'option')) {
          echo '"'. get_field('linkedin', 'option') .'",';
        }; ?>
        <?php
        //  YouTube Link  //
        if(get_field('youtube', 'option')) {
          echo '"'. get_field('youtube', 'option') .'",';
        }; ?>
        <?php
        //  Pinterest Link  //
        if(get_field('pinterest', 'option')) {
          echo '"'. get_field('pinterest', 'option') .'",';
        }; ?>
        <?php
        //  Instagram Link  //
        if(get_field('instagram', 'option')) {
          echo '"'. get_field('instagram', 'option') .'"';
        }; ?>
      ]
    }
    
  </script>
  
<?php } endif;