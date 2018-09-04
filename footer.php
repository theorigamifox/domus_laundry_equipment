</div><!-- **Container - End** -->

</div><!-- **Main - End** --><?php
do_action('dry_cleaning_hook_content_after');

$footer = (int) get_theme_mod('show-footer', dry_cleaning_defaults('show-footer'));
$show_copyright_section = (int) get_theme_mod('show-copyright-text', dry_cleaning_defaults('show-copyright-text'));
?>
<?php if (!is_page(47) || is_front_page()): ?>

    <div class="container">
        <section id="quick-contact">
            <div id="quick-contact-form">
                <h3>Need help? Drop us a message</h3>
                <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]'); ?>
            </div>
        </section>    
    </div>

<?php endif; ?>

<div id="footer-menu">
    <div class="container">
        <?php wp_nav_menu(array('theme_location' => 'footer_1', 'container_class' => 'footer-menu')); ?>
        <?php wp_nav_menu(array('theme_location' => 'footer_2', 'container_class' => 'footer-menu')); ?>
        <?php wp_nav_menu(array('theme_location' => 'footer_3', 'container_class' => 'footer-menu')); ?>
        <?php wp_nav_menu(array('theme_location' => 'footer_4', 'container_class' => 'footer-menu')); ?>
        <?php //wp_nav_menu(array('theme_location' => 'footer_5', 'container_class' => 'footer-menu'));  ?>
    </div>
    <?php if ($address): ?>
        <div class="row">
            <p class="footer-address"><?php echo $address; ?></p>
        </div>
    <?php endif; ?>
</div>
<!-- **Footer** -->
<footer id="footer">
    <?php
    if (!empty($footer)) :
        $darkbg = (int) get_theme_mod('enable-footer-darkbg', dry_cleaning_defaults('enable-footer-darkbg'));
        $class = ( $darkbg ) ? 'dt-sc-dark-bg' : '';
        $columns = (int) get_theme_mod('footer-columns', dry_cleaning_defaults('footer-columns'));
        ?>
        <div class="footer-widgets <?php echo esc_attr($class); ?>">
            <div class="container"><?php dry_cleaning_show_footer_widgetarea($columns); ?>
            </div>
        </div>
        <?php
    endif;

    $copyright = get_theme_mod('copyright-text', dry_cleaning_defaults('copyright-text'));
    $copyright = stripslashes($copyright);
    $copyright = do_shortcode($copyright);

    $copyright_next = get_theme_mod('copyright-next', dry_cleaning_defaults('copyright-next'));

    $darkbg = get_theme_mod('enable-copyright-darkbg', dry_cleaning_defaults('enable-copyright-darkbg'));
    $class = ( $darkbg ) ? 'dt-sc-dark-bg' : '';
    $center = ( $copyright_next == 'disable' ) ? 'align-center' : '';
    ?>
    <div class="footer-copyright <?php echo esc_attr($class); ?>">
        <div class="container">
            <div class="column dt-sc-one-half first <?php esc_attr($center); ?>"><?php
                if (!empty($show_copyright_section)) :
                    echo dry_cleaning_wp_kses($copyright);
                endif;
                ?>
            </div>

            <?php if ($copyright_next != "hide" && $copyright_next != "hidden"): ?>

                <div class="column dt-sc-one-half <?php esc_attr($copyright_next); ?>"><?php
                    if ($copyright_next == 'sociable') :
                        $sociables = get_theme_mod('footer-sociables', dry_cleaning_defaults('footer-sociables'));

                        $start = $end = $list = '';

                        if (!empty($sociables)) {
                            $start = '<ul class="dt-sc-sociable">';
                            $end = '</ul>';
                        }

                        foreach ($sociables as $social) {
                            $value = get_theme_mod('social-' . $social, '#');
                            if (!empty($value)) {
                                $list .= '<li class="' . esc_attr($social) . '"><a target="_blank" href="' . esc_attr($value) . '"></a></li>';
                            }
                        }

                        echo (!empty($start) && !empty($list) && !empty($end)) ? $start . $list . $end : ''; elseif ($copyright_next == 'footer-menu'):
                        wp_nav_menu(array(
                            'container' => false,
                            'menu_id' => 'menu-footer-menu',
                            'menu_class' => 'menu-links',
                            'theme_location' => 'footer-menu',
                            'depth' => 0
                        ));
                    endif;
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer><!-- **Footer - End** -->
</div><!-- **Inner Wrapper - End** -->
</div><!-- **Wrapper - End** -->
<div class="gototop">
    <div><i class="fa fa-arrow-alt-circle-up"></i></div>
</div>
<?php do_action('dry_cleaning_hook_bottom'); ?>
<?php wp_footer(); ?>
</body>
</html>