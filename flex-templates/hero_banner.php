<?php
if (have_rows('slides')) : ?>
    <section class="hero-banner">

        <div class="hero-banner-slider js-hero-banner-slider">
            <!-- slide item -->
            <?php while (have_rows('slides')) : the_row();
                $heading = get_sub_field('heading');
                $content = get_sub_field('content');
                $cta = get_sub_field('cta');
                $image = get_sub_field('image');
            ?>
                <div class="item-slide">
                    <div class="inner-wrap">
                        <div class="container">
                            <div class="banner-content">
                                <?php echo $heading;
                                echo $content;
                                if (!empty($cta)) : ?>
                                    <a href="<?php echo $cta['url'] ?>" class="cta-button" <?php echo ($cta['target']) ? 'target="_blank"' : ""; ?> title="<?php echo $cta['title'] ?>"><?php echo $cta['title'] ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="image-wrapper">
                                <img src='<?php echo $image['url'] ?>' alt='<?php echo $image['alt'] ?>'>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

            <!-- slide item end-->
        </div>

    </section>
<?php endif; ?>