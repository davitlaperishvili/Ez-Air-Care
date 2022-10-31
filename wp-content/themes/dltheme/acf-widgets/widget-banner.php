
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_text = get_sub_field('section_text');
        $banner_stats = get_sub_field('banner_stats');
        $section_image = get_sub_field('section_image');
        $section_button_url = get_sub_field('section_button_url');
        $section_button_text = get_sub_field('section_button_text');
        $rowIndex = get_row_index();
    ?>
    
    <section class="banner" id="content<?php echo $rowIndex ?>">
        <div class="container">
            <div class="section_content">
                <h2 class="section_title"><?php echo $section_title  ?></h2>
                <div class="section_text"><?php echo $section_text  ?></div>
                <div class="section_stats">
                    <?php
                        foreach( $banner_stats as $stat ){
                            ?>
                            <div class="stat_item">
                                <div class="value"><?php echo $stat['stat_value'] ?></div>
                                <div class="title"><?php echo $stat['stat_title'] ?></div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
                <div class="theme_button green">
                    <a href="<?php echo $section_button_url ?>"><?php echo $section_button_text ?></a>
                </div>
            </div>
            <figure>
                <img src="<?php echo $section_image['url'] ?>" alt="<?php echo $section_image['alt'] ?>">
            </figure>
        </div>
    </section>

