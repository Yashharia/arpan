<?php
$header_scripts = get_field('header_scripts', 'option');
$body_scripts = get_field('body_scripts', 'option');
$logo = get_field('logo', 'option');
$cta = get_field('cta', 'option');
$is_hide_mywbr_button = get_field('is_hide_mywbr_button');
$social_icons = get_field('mobile_menu_social_icons', 'option');
$logo = (get_field('logo')) ? get_field('logo') . '_header_logo' : 'wbr_group_header_logo';
$header_logo = get_field($logo, 'option');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php wp_head();
    echo $header_scripts; ?>
</head>

<body <?php body_class(); ?>>
    <?php echo $body_scripts ?>
    <div id="page" class="site">
        <!-- site-header section start -->
        <header class="site-header">
            <div class="container">
                <div class="site-header-wrap">
                    <!-- header logo start -->
                    <div class="header-logo">
                        <a href="<?php echo site_url('/'); ?>" title="WBR logo">
                            <img src="<?php echo $header_logo['url'] ?>" alt="<?php echo $header_logo['alt'] ?>">
                        </a>
                    </div>
                    <!-- header logo end -->

                    <?php if (!(isset($is_hide_mywbr_button) && $is_hide_mywbr_button == 'yes') && !empty($cta)) { ?>
                        <a href="<?php echo $cta['url'] ?>" <?php echo ($cta['target']) ? 'target="_blank"' : ""; ?> class="cta-button mobile-menu-cta" title="<?php echo $cta['title'] ?>"><?php echo $cta['title'] ?></a>
                    <?php } ?>

                    <!-- handburger trigger start -->
                    <div class="menu-icon">
                        <div class="menu-box cta-outline">
                            <span class="menu-text">MENU</span>
                            <img src="./assets/images/X.svg" class="close-icon" alt="">
                        </div>
                    </div>
                    <!-- handburger trigger end-->

                    <!-- header-nav start -->
                    <nav class="header-nav">
                        <div class="inner-wrap">
                            <?php
                            echo wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'add_a_class' => 'nav-item',
                                'container' => false,
                                'menu_class' => 'menu',
                            )); ?>



                            <!-- mobile socials links -->
                            <?php if ($social_icons) : ?>
                                <div class="social-links">
                                    <?php foreach ($social_icons as $row) {
                                        $image = $row['image'];
                                        $link = $row['link']; ?>
                                        <a href="<?php echo $link['url'] ?>" title="<?php echo $link['title'] ?>" class="linkdin">
                                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                                        </a>
                                    <?php } ?>
                                </div>
                            <?php endif; ?>
                            <!-- mobile socials links end-->

                        </div>
                        <?php if (!(isset($is_hide_mywbr_button) && $is_hide_mywbr_button == 'yes') && !empty($cta)) { ?>
                            <a href="<?php echo $cta['url'] ?>" <?php echo ($cta['target']) ? 'target="_blank"' : ""; ?> class="cta-button" title="<?php echo $cta['title'] ?>"><?php echo $cta['title'] ?></a>
                        <?php } ?>
                    </nav>
                    <!-- header-nav end -->

                </div>
            </div>
        </header>
        <!-- site-header section end -->