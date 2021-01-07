<?php

//  Template Name: Sitemap

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <section class="pad-bottom-40">
        <div class="container">  
            <div class="text-center pad-bottom-30">

                <?php the_title( '<h1>', '</h1>' ); ?>

                <p>Please use the links below to find what you are looking for</p>

                <?php the_content(); ?>

            </div>    

            <div class="row text-center"> 

                <div class="col-12 col-4-m pad-bottom-40 pad-bottom-none-m"><p class="font2 font-600 fs-4">Pages</p><?php wp_nav_menu(array('menu' => 'Sitemap')); ?></div>

                <div class="col-12 col-4-m pad-bottom-40 pad-bottom-none-m"><p class="font2 font-600 fs-4">Categories</p><?php wp_list_categories(array('title_li' => false, 'style' => false)); ?></div>

                <div class="col-12 col-4-m pad-bottom-40 pad-bottom-none-m">
                    <p class="font2 font-600 fs-4">Posts</p>
                    <?php $loop = new WP_Query( array( 'posts_per_page' => 10 ) ); ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                    <?php endwhile; wp_reset_query(); ?>
                </div>

            </div>


        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>