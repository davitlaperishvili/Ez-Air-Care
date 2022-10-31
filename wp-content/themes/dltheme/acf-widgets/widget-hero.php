
   <?php  
        $heroTitle = get_sub_field('hero_title'); 
        $heroText = get_sub_field('hero_text'); 
        $heroBg = get_sub_field('hero_background_image'); 
        $hero_benefits = get_sub_field('hero_benefits'); 
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
                        <div class="hero_content_text">
                            <h1 class="page_title"><?php echo $heroTitle ?></h1>
                            <div class="hero_text"><?php echo $heroText ?></div>
                        </div>
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
        <div class="hero_benefits">
            <div class="container">
                <?php 
                    foreach( $hero_benefits as $benefit){
                        ?>
                            <div class="hero_benefit">
                                <div class="benefit_header">
                                    <img src="<?php echo $benefit['benefit_image']['url'] ?>" alt="<?php echo $benefit['benefit_image']['alt'] ?>">
                                    <span><?php echo $benefit['benefit_title'] ?></span>
                                </div>
                                <div class="benefit_text"><?php echo $benefit['benefit_text'] ?></div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>

