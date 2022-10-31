
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_text = get_sub_field('section_text');
        $section_map = get_sub_field('section_map_iframe');
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
            <div class="contact_form">
                <div class="form_wrap">
                    <?php echo do_shortcode($section_contact_form) ?>
                    <div class="form_title">Schedule an appointment</div>
                    <div class="form_items">
                        <div class="form_item">
                            <input type="text" placeholder="Your name">
                        </div>
                        <div class="form_item">
                            <input type="text" placeholder="Your name">
                        </div>
                        <div class="form_item">
                            <input type="text" placeholder="Your name">
                        </div>
                        <div class="form_item">
                            <input type="text" placeholder="Your name">
                        </div>
                        <div class="form_item column-2">
                            <textarea placeholder="Message"></textarea>
                        </div>
                        <div class="form_item"><span>All Fields Are Obligatory</span></div>
                        <div class="form_item form_submit column-2">
                            <button type="submit" class="gilaki">Schedule an appointment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

