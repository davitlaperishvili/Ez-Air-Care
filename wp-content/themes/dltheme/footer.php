
<?php 
	$phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
	$working_hours = get_field('working_hours', 'option');
	$address = get_field('address', 'option');
	$footer_desc = get_field('footer_desc', 'option');
	$footer_contact_form = get_field('footer_contact_form', 'option');
	$footer_rights = get_field('footer_rights', 'option');
?>
<footer class="trans-all-4">
    <div class="container">
        <div class="footer_columns">
            <div class="column">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="footer_contact">
                    <ul>
                        <li>
                            <a href="tel:<?php echo $phone ?>">
                                <img src="" alt="">
                                <?php echo $phoneVisible ?>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:<?php echo $email ?>">
                                <img src="" alt="">
                                <?php echo $email ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="column">
                <?php
                    wp_nav_menu([
                        'theme_location'	=> 'footer_menu',
                        'menu'				=> 'footer_menu', 
                        'container'			=> 'nav',
                        'container_class'	=> 'footer_navigation',
                        'menu_class'		=> 'footer_navigation'
                    ]);
                ?>
            </div>
            <div class="column">
                <div class="footer_desc"><?php echo $footer_desc ?></div>
                <div class="footer_contact_form">
                    <?php echo do_shortcode($footer_contact_form) ?>
                </div>
            </div>
        </div>
        <div class="rights"><?php echo $footer_rights ?></div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>