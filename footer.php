</div>
<?php
$footer_scripts = get_field('footer_scripts', 'option');
$footer_links = get_field('footer_links', 'option');
$copyright = get_field('copyright', 'option');
$call_icon = get_field('call_icon', 'option');
$call_icon_link = get_field('call_icon_link', 'option');
$social_icons = get_field('social_icons', 'option');
$social_icons_heading = get_field('social_icons_heading', 'option');
$logo = (get_field('logo')) ? get_field('logo') . '_footer_logo' : 'wbr_group_footer_logo';
$footer_logo = get_field($logo, 'option');
$cta = get_field('cta', 'option');


function get_footer_menu($menu_name)
{
    $locations = get_nav_menu_locations(); //get all menu locations
    $menu = wp_get_nav_menu_object($locations[$menu_name]);

    echo '<p class="menu-heading"><b>' . $menu->name . '</b></p>'; // Display the menu name
    echo wp_nav_menu(array(
        'theme_location' => $menu_name,
        'add_a_class' => 'nav-item',
        'container' => false,
        'menu_class' => 'menu',
    ));
}
?>

<!-- site-footer section start -->
<footer class="site-footer">
    <div class="container">
        <div class="top-content">
            <div class="footer-logo">
                <a href="<?php echo site_url('/'); ?>" title="wbr logo">
                    <img src="<?php echo $footer_logo['url'] ?>" alt="<?php echo $footer_logo['alt'] ?>">
                </a>
                <?php if (!(isset($is_hide_mywbr_button) && $is_hide_mywbr_button == 'yes') && !empty($cta)) { ?>
                    <a href="<?php echo $cta['url'] ?>" <?php echo ($cta['target']) ? 'target="_blank"' : ""; ?> class="cta-button footer-cta-button" title="<?php echo $cta['title'] ?>"><?php echo $cta['title'] ?></a>
                <?php } ?>
            </div>
            <div class="footer-menu-wrapper">
                <div class="footer-col-1">
                    <div class="menu-wrapper">
                        <?php get_footer_menu('footer-1-menu'); ?>
                    </div>
                    <div class="menu-wrapper">
                        <?php get_footer_menu('footer-2-menu'); ?>
                    </div>
                </div>
                <div class="footer-col-1">
                    <div class="menu-wrapper">

                        <?php get_footer_menu('footer-3-menu'); ?>
                    </div>
                </div>
                <div class="footer-col-2">
                    <div class="menu-wrapper">

                        <?php get_footer_menu('footer-4-menu'); ?>
                    </div>

                </div>
                <div class="footer-col-3">
                    <div class="menu-wrapper">

                        <?php get_footer_menu('footer-5-menu'); ?>
                    </div>

                </div>
                <div class="footer-col-4">
                    <div class="menu-wrapper">
                        <?php get_footer_menu('footer-6-menu'); ?>
                    </div>
                    <div class="menu-wrapper">
                        <?php get_footer_menu('footer-7-menu'); ?>
                        <?php if (!empty($call_icon) && !empty($call_icon_link)): ?>
                            <a href="<?php echo $call_icon_link['url'] ?>" <?php echo ($call_icon_link['target']) ? 'target="_blank"' : ""; ?>><img src="<?php echo $call_icon['url'] ?>" alt="call"></a>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
            <div class="social-media">
                <?php if (!empty($social_icons_heading)): ?>
                    <p class="menu-heading"><b><?php echo $social_icons_heading ?></b></p>
                <?php endif; ?>
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
            </div>
        </div>
        <div class="bottom-content">
            <?php if (!empty($copyright)) : ?>
                <div class="copyright">
                    <?php echo $copyright ?>
                </div>
            <?php endif; ?>
            <?php if (have_rows('terms_links', 'option')) : ?>
                <div class="terms-links">

                    <?php while (have_rows('terms_links', 'option')) : the_row();
                        $link = get_sub_field('link');
                    ?>

                        <?php if (!empty($link)) : ?>
                            <a href="<?php echo $link['url']; ?>" <?php echo ($link['target']) ? 'target="_blank"' : ""; ?>><?php echo $link['title'] ?></a>
                        <?php endif; ?>


                    <?php endwhile; ?>

                </div>
            <?php endif; ?>
        </div>

    </div>
</footer>
<!-- site-footer section end -->


<?php
echo $footer_scripts;
wp_footer(); ?>

</body>

</html>