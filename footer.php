</div>
<?php
$footer_scripts = get_field('footer_scripts', 'option');
$footer_links = get_field('footer_links', 'option');
$copyright = get_field('copyright', 'option');
$social_icons = get_field('social_icons', 'option');
$logo = (get_field('logo')) ? get_field('logo').'_footer_logo' : 'wbr_group_footer_logo';
$footer_logo = get_field($logo, 'option');
?>

<!-- site-footer section start -->
<footer class="site-footer">
    <div class="top-content">
        <div class="box-12 box-lg-6 footer-logo">
            <a href="<?php echo site_url('/'); ?>" title="wbr logo">
                <img src="<?php echo $footer_logo['url'] ?>" alt="<?php echo $footer_logo['alt'] ?>">
            </a>
        </div>
        <div class="box-12 box-lg-6 action-content">
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
    <?php if (!empty($copyright)) : ?>
        <div class="bottom-content">
            <?php echo $copyright ?>
        </div>
    <?php endif; ?>
</footer>
<!-- site-footer section end -->


<?php
echo $footer_scripts;
wp_footer(); ?>

</body>

</html>