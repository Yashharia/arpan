</div>
<?php
$footer_scripts = get_field('footer_scripts', 'option');
$footer_links = get_field('footer_links', 'option');
$copyright = get_field('copyright', 'option');
$social_icons = get_field('social_icons', 'option');
$logo = (get_field('logo')) ? get_field('logo') . '_footer_logo' : 'wbr_group_footer_logo';
$footer_logo = get_field($logo, 'option');

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
            </div>
            <div class="footer-menu-wrapper">
                <div>
                    <?php

                    get_footer_menu('footer-1-menu');
                    get_footer_menu('footer-2-menu');

                    ?>
                </div>
                <div>
                    <?php get_footer_menu('footer-3-menu'); ?>
                </div>
                <div>
                    <?php get_footer_menu('footer-4-menu'); ?>

                </div>
                <div>
                    <?php get_footer_menu('footer-5-menu'); ?>

                </div>
                <div>
                    <?php get_footer_menu('footer-6-menu'); ?>
                    <?php get_footer_menu('footer-7-menu'); ?>
                </div>
            </div>
            <div class="social-media">
                <?php echo $footer_links ?>
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