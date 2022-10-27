
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_text = get_sub_field('section_text');
        $section_image = get_sub_field('section_image');
        $section_button_url = get_sub_field('section_button_url');
        $section_button_text = get_sub_field('section_button_text');
        $rowIndex = get_row_index();
    ?>
    
    <section class="about_us" id="content<?php echo $rowIndex ?>">
        <div class="container">
            <figure>
                <img src="<?php echo $section_image['url'] ?>" alt="<?php echo $section_image['alt'] ?>">
            </figure>
            <div class="section_content">
                <h2 class="section_title"><?php echo $section_title  ?></h2>
                <div class="section_text"><?php echo $section_text  ?></div>
                <div class="theme_button">
                    <a href="<?php echo $section_button_url ?>"><?php echo $section_button_text ?></a>
                </div>
            </div>
        </div>
    </section>

