<?php

$sub_heading = get_sub_field('sub_heading');
$heading = get_sub_field('heading');
$text = get_sub_field('text');
$cta = get_sub_field('cta');
?>
<section class="partners_slider">

    <div class="container">

        <div class="row-wrap">

            <div class="section-heading">
                <div class="inner-wrap">
                    <div class="text-wrapper">
                        <?php if (!empty($sub_heading)): ?>
                            <h6 class="sub-heading"><?php echo $sub_heading ?></h6>
                        <?php endif; ?>
                        <h3 class="h2"><?php echo $heading ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-container container">
            <div class="left-side"></div>
            <?php if (have_rows('logos')) : ?>
                <div class="right-slider js-partners-slider">
                    <?php while (have_rows('logos')) : the_row();
                        $image = get_sub_field('image');
                        $link = get_sub_field('link');
                        if ($link) {
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        } else {
                            $link_url = "#";
                            $link_target = '_self';
                        }
                    ?>

                        <div class="item slider-card">
                            <a href="<?php echo $link_url ?>" target="<?php echo esc_attr($link_target); ?>">
                                <img src="<?php echo $image['url'] ?>" class="card-image" alt="<?php echo $image['alt'] ?>">
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>




</section>