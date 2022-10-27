
   <?php  
        $section_pretitle = get_sub_field('section_pretitle'); 
        $section_title = get_sub_field('section_title'); 
        $testimoials_list = get_sub_field('testimoials_list');
        $rowIndex = get_row_index();
    ?>
    
    <section class="testimonials" id="content<?php echo $rowIndex ?>">
        <div class="container">
            <h4 class="section_pretitle"><?php echo $section_pretitle ?></h4>
            <h2 class="section_title"><?php echo $section_title ?></h2>
            <div class="testimonials_slider swiper">
                <div class="swiper-wrapper">
                    <?php 
                        foreach ($testimoials_list as $testimoial) {
                            ?>
                                <div class="testimonial_item swiper-slide">
                                    <img src="" alt="">
                                    <div class="testimonial_text"><?php echo $testimoial['testimonial_text'] ?></div>
                                    <div class="testimonial_author"><?php echo $testimoial['testimonial_author'] ?></div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

