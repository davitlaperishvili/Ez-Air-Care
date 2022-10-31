
   <?php  
        $heroTitle = get_sub_field('hero_title'); 
        $heroText = get_sub_field('hero_text'); 
        $heroBg = get_sub_field('hero_background_image'); 
        $hero_first_button_text = get_sub_field('hero_first_button_text');
        $hero_first_button_url = get_sub_field('hero_first_button_url');
        $hero_second_button_text = get_sub_field('hero_second_button_text');
        $hero_second_button_url = get_sub_field('hero_second_button_url');
        $rowIndex = get_row_index();
    ?>
    
    <section class="hero" id="content<?php echo $rowIndex ?>">
    
        <figure>
            <img src="<?php echo $heroBg['url'] ?>" alt="<?php echo $heroBg['alt'] ?>">
        </figure>
        <div class="container">
            <div class="hero_wrap">
                <div class="hero_content">
                    <div class="hero_left">
                        <h1 class="page_title"><?php echo $heroTitle ?></h1>
                        <div class="hero_text"><?php echo $heroText ?></div>
                        <?php 
                            if($hero_first_button_url || $hero_second_button_url){
                                ?>
                                    <div class="section_buttons">
                                        <?php 
                                            if($hero_first_button_url ){
                                                ?>
                                                    <div class="theme_button">
                                                        <a href="<?php echo $hero_first_button_url ?>"><?php echo $hero_first_button_text ?></a>
                                                    </div>
                                                <?php
                                            }
                                        ?>
                                        <?php 
                                            if($hero_second_button_url ){
                                                ?>
                                                    <div class="theme_button white">
                                                        <a href="<?php echo $hero_second_button_url ?>"><?php echo $hero_second_button_text ?></a>
                                                    </div>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

