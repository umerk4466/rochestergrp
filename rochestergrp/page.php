<?php get_header(); ?>
 
<div class="container mt-5">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
            echo get_the_content();
            
            // End of the loop.
        endwhile;
        ?>
</div><!-- .container -->
 
<?php get_footer(); ?>