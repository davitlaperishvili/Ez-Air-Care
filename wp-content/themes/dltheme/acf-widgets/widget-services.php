
   <?php  
        $section_title = get_sub_field('section_title'); 
        $services_list = get_sub_field('services_list');
        $rowIndex = get_row_index();
    ?>
    
    <section class="about_us" id="content<?php echo $rowIndex ?>">
        <div class="container">
            <div class="services_list">
                <?php 
                    foreach ($services_list as $service) {
                        ?>
                            <div class="service_item">
                                <div class="service_content">
                                    <div class="service_header">
                                        <img src="<?php echo $service['service_icon']['url'] ?>" alt="<?php echo $service['service_icon']['alt'] ?>" class="icon">
                                        <h3 class="service_title"><?php echo $service['service_title'] ?></h3>
                                    </div>
                                    <div class="service_text"><?php echo $service['service_text'] ?></div>
                                </div>
                                <div class="service_contact">
                                    <div class="theme_button">
                                        <a href="<?php echo $service['service_button_url'] ?>"><?php echo $service['service_button_text'] ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>

