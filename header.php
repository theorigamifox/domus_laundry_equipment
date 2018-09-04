<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php dry_cleaning_viewport(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <?php
// loading
        $loader = (int) get_theme_mod('use-site-loader', dry_cleaning_defaults('use-site-loader'));
        if (!empty($loader))
            echo '<div class="loader"><div class="loader-inner ball-scale-multiple"><div></div><div></div><div></div></div></div>';
// top hook
        do_action('dry_cleaning_hook_top');
        ?>

        <!-- **Wrapper** -->
        <div class="wrapper">
            <div class="inner-wrapper">

                <!-- **Header Wrapper** -->
                <?php
                // header types
                $htype = get_theme_mod('header-type', dry_cleaning_defaults('header-type'));

                $hdarkbg = get_theme_mod('enable-header-darkbg', dry_cleaning_defaults('enable-header-darkbg'));
                $class = ( $hdarkbg ) ? 'dt-sc-dark-bg' : '';
                ?>
                <div id="header-wrapper" class="<?php echo esc_attr($class); ?>">
                    <!-- **Header** -->
                    <header id="header">				
                        <!-- **Main Header Wrapper** -->
                        <div id="main-header-wrapper" class="main-header-wrapper">
                            <!-- **Main Header** -->
                            <div class="main-header"><?php
                                if (isset($htype) && ($htype == 'fullwidth-header header-align-center fullwidth-menu-header')):
                                    $header_left = (int) get_theme_mod('enable-header-left-content', dry_cleaning_defaults('enable-header-left-content'));
                                    if (!empty($header_left)):
                                        ?>
                                        <div class="header-left"><?php
                                            $leftcontent = get_theme_mod('header-left-content', dry_cleaning_defaults('header-left-content'));
                                            if (isset($leftcontent) && $leftcontent != '') :
                                                $content = do_shortcode(stripcslashes($leftcontent));
                                                echo dry_cleaning_wp_kses($content);
                                            endif;
                                            ?></div><?php
                                    endif;
                                endif;



                                if (isset($htype) && (($htype == 'fullwidth-header header-align-center fullwidth-menu-header') ||
                                        ($htype == 'fullwidth-header header-align-left fullwidth-menu-header'))):
                                    $header_right = (int) get_theme_mod('enable-header-right-content', dry_cleaning_defaults('enable-header-right-content'));
                                    if (!empty($header_right)):
                                        ?>
                                        <div class="header-right"><?php
                                            $rightcontent = get_theme_mod('header-right-content', dry_cleaning_defaults('header-right-content'));
                                            if (isset($rightcontent) && $rightcontent != '') :
                                                $content = do_shortcode(stripcslashes($rightcontent));
                                                echo dry_cleaning_wp_kses($content);
                                            endif;
                                            ?></div><?php
                                    endif;
                                endif;
                                ?>

                                <div id="menu-wrapper" class="menu-wrapper <?php echo get_theme_mod('menu-active-style', dry_cleaning_defaults('menu-active-style')); ?>">
                                    <?php dry_cleaning_header_logo(); ?>
                                    <div class="dt-menu-toggle" id="dt-menu-toggle">
                                        <span class="dt-menu-toggle-icon"></span>
                                    </div><?php
                                    if (isset($htype)):
                                        switch ($htype):
                                            case 'split-header fullwidth-header':
                                            case 'split-header boxed-header':
                                                echo '<nav id="main-menu">';
                                                dry_cleaning_wp_split_menu();
                                                echo '</nav>';
                                                break;

                                            case 'overlay-header':
                                                echo '<div class="overlay overlay-hugeinc">';
                                                echo '<div class="overlay-close"></div>';
                                                dry_cleaning_wp_nav_menu(1);
                                                echo '</div>';
                                                echo '<div id="trigger-overlay"></div>';
                                                break;

                                            case 'fullwidth-header':
                                            case 'boxed-header':
                                            case 'two-color-header':
                                            default:
                                                dry_cleaning_wp_nav_menu();
                                                require_once( DRY_CLEANING_THEME_DIR . '/headers/default.php' );
                                                break;
                                        endswitch;
                                    endif;
                                    ?>
                                </div><?php
                                // left header
                                if (isset($htype) && ( $htype == 'left-header' || $htype == 'left-header-boxed' || $htype == 'creative-header')):
                                    ?>
                                    <div class="left-header-footer"><?php
                                        $content = get_theme_mod('header-left-content', dry_cleaning_defaults('header-left-content'));
                                        $content = do_shortcode(stripcslashes($content));
                                        echo dry_cleaning_wp_kses($content);
                                        ?></div><?php endif;
                                    ?>
                            </div>
                        </div><!-- **Main Header** --><?php
                        if ($htype != "left-header" && $htype != "left-header-boxed" && $htype != "creative-header" && $htype != "overlay-header"):
                            // header position
                            if (isset($headerpos) && $headerpos != 'below slider'):
                                echo dry_cleaning_slider();
                            endif;
                        endif;
                        ?>

                    </header><!-- **Header - End** -->
                </div><!-- **Header Wrapper - End** -->
                    <section id="page-header">
                        <?php the_post_thumbnail('full'); ?>
                        <?php
                        $headline = get_field('header_headline');
                        $subtext = get_field('header_subtext');
                        $link = get_field('header_link');
                        $align = get_field('header_align');
                        if ($headline):?>
                        <div id="page-description" class="<?php echo $align; ?>">
                            <?php
                            if ($headline): echo "<h1>" . $headline . "</h1>";
                            endif;
                            ?>
                                <?php if ($subtext): ?>
                                <div id="subtext">
                                    <?php echo $subtext; ?>
        <?php if ($link): ?>
                                        <div class="button-wrapper">
                                            <a href="<?php echo $link['url']; ?>" class="button"><?php echo $link['title']; ?></a>
                                        </div>
        <?php endif; ?>
                                </div><?php endif; ?> 
                        </div>
                        <?php endif;?>
                    </section>
<?php if ($htype == "creative-header") echo '<div id="toggle-sidebar"></div>'; ?>

                <!-- **Main** -->
                <div id="main"><?php
                    if ($htype == "left-header" || $htype == "left-header-boxed" || $htype == "creative-header" || $htype == "overlay-header"):
                        echo dry_cleaning_slider();
                    endif;

                    // subtitle & breadcrumb section
                    if (is_page()) :

                        $tpl_default_settings = get_post_meta($post->ID, '_tpl_default_settings', TRUE);
                        $tpl_default_settings = is_array($tpl_default_settings) ? $tpl_default_settings : array();

                        if (empty($tpl_default_settings))
                            $tpl_default_settings['enable-sub-title'] = 'true';

                        if ($tpl_default_settings['enable-sub-title'] == 'true'):
                            require_once( DRY_CLEANING_THEME_DIR . '/headers/breadcrumb.php' );
                        endif;


                    else:
                        require_once( DRY_CLEANING_THEME_DIR . '/headers/breadcrumb.php' );
                    endif;

                    $class = "container";
                    if (is_page_template('tpl-portfolio.php')) {
                        $class = ( $tpl_default_settings['layout'] == 'fullwidth' ) ? "portfolio-fullwidth-container" : "container";
                    }

                    if (is_singular('tribe_events')) {
                        $tpl_default_settings = get_post_meta($post->ID, '_custom_settings', TRUE);
                        $tpl_default_settings = is_array($tpl_default_settings) ? $tpl_default_settings : array();
                        $post_style = array_key_exists("event-post-style", $tpl_default_settings) ? $tpl_default_settings['event-post-style'] : "type1";
                        switch ($post_style):
                            case 'type2':
                                $class = "event-type2-fullwidth";
                                break;
                            case 'type5':
                                $class = "event-type5-fullwidth";
                                break;
                            default:
                                $class = "container";
                                break;
                        endswitch;
                    }

                    if (is_singular()) {
                        $tpl_default_settings = get_post_meta($post->ID, '_custom_settings', TRUE);
                        $tpl_default_settings = is_array($tpl_default_settings) ? $tpl_default_settings : array();
                        $class = ( isset($tpl_default_settings['layout']) ) && ( $tpl_default_settings['layout'] == 'fullwidth-container') ? "show-in-fullwidth" : $class;
                    }

                    if (is_archive()) {
                        $post_type = get_post_type();
                        if ($post_type == 'dt_portfolios') {
                            $allow_fullwidth = get_theme_mod('portfolio-allow-full-width', dry_cleaning_defaults('portfolio-allow-full-width'));
                            if ($allow_fullwidth) {
                                $class = 'show-in-fullwidth';
                            }
                        }
                    }
                    ?>
                    <!-- ** Container ** -->
                    <div class="<?php echo esc_attr($class); ?>"><?php do_action('dry_cleaning_hook_content_before'); ?>