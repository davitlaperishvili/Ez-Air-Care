<?php 
    //Template Name: Front Page
?>
<?php get_header(); ?>

<main class="home_page">
    <?php 
        if( have_rows('homepage') ):

            // Loop through rows.
            while ( have_rows('homepage') ) : the_row();
        
                // Case: Paragraph layout.
                if( get_row_layout() == 'hero' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-hero.php');
                
                elseif( get_row_layout() == 'special_offers' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-special_offers.php');
                
                elseif( get_row_layout() == 'about_us' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-about_us.php');
                
                elseif( get_row_layout() == 'services' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-services.php');
                
                elseif( get_row_layout() == 'banner' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-banner.php');
                
                elseif( get_row_layout() == 'testimonials' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-testimonials.php');
                
                elseif( get_row_layout() == 'contacts' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-contacts.php');

                endif;
            endwhile;
        
        else :
        endif;
    ?>
</main>

<?php get_footer(); ?>