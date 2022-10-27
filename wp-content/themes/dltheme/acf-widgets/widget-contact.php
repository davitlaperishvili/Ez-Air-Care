
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_text = get_sub_field('section_text');
        $section_map = get_sub_field('section_map');
        $section_contact_form = get_sub_field('section_contact_form');
        $rowIndex = get_row_index();
    ?>
    
    <section class="contact" id="content<?php echo $rowIndex ?>">
        <div class="container">
            <div class="section_content">
                <h2 class="section_title"><?php echo $section_title  ?></h2>
                <div class="section_text"><?php echo $section_text  ?></div>
                <div class="map_iframe">
                    <?php echo $section_map ?>
                </div>
            </div>
            <div class="contacct_form">
                <?php echo do_shortcode($section_contact_form) ?>
            </div>
        </div>
    </section>

