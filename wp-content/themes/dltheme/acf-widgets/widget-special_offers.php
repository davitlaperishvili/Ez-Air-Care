
   <?php  
        $section_title = get_sub_field('section_title'); 
        $offers_list = get_sub_field('offers_list');
        $rowIndex = get_row_index();
    ?>
    
    <section class="special_offers" id="content<?php echo $rowIndex ?>">
        <div class="container">
            <h2 class="section_title"><?php echo $section_title  ?></h2>
            <div class="offers_list">
                <?php 
                    foreach($offers_list as $offer) {
                        if($offer['type'] == "promo"){
                            ?>
                                <div class="offer_card promo">
                                    <div class="card_title"><?php echo $offer['promo_title'] ?></div>
                                    <div class="promo_content"><?php echo $offer['promo_content'] ?></div>
                                    <figure class="promo_image">
                                        <img src="<?php echo $offer['promo_image']['url'] ?>" alt="<?php echo $offer['promo_image']['alt'] ?>">
                                    </figure>
                                </div>
                            <?php
                        } else {
                            ?>
                                <div class="offer_card plan">
                                    <div class="plan_price"><span><?php echo $offer['plan_price'] ?></span> / month</div>
                                    <div class="plan_title"><?php echo $offer['plan_title'] ?></div>
                                    <div class="plan_desc">
                                        <?php echo $offer['plan_desc'] ?>
                                    </div>
                                    <div class="theme_button">
                                        <a href="<?php echo $offer['plan_button_url'] ?>"><?php echo $offer['plan_button_text'] ?></a>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                ?>
                
            </div>
        </div>
    </section>

