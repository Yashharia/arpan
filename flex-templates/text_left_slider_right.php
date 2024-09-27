<?php

$sub_heading = get_sub_field('sub_heading');
$heading = get_sub_field('heading');
$text = get_sub_field('text');
$cta = get_sub_field('cta');
?>
<section class="text-left-slider-right">

    <div class="container">

        <div class="row-wrap">

            <div class="text-wrapper">
                <?php if (!empty($sub_heading)) : ?>
                    <p class="sub-heading"><?php echo $sub_heading; ?></p>
                <?php endif; ?>
                <?php if (!empty($heading)) : ?>
                    <h2><?php echo $heading; ?></h2>
                <?php endif; ?>
                <?php if (!empty($text)) : ?>
                    <p><?php echo $text; ?></p>
                <?php endif; ?>
                <?php if (!empty($cta)): ?>
                    <div class="cta-wrapper">
                        <a href="<?php echo $cta['url'] ?>" <?php echo ($cta['target']) ? 'target="_blank"' : ""; ?> class="cta-button" title="<?php echo $cta['title'] ?>"><?php echo $cta['title'] ?></a>
                    </div>
                <?php endif; ?>
            </div>

            <?php if (have_rows('slider')) : ?>
                <div class="slider-wrapper">
                    <div class="focus-slider js-focus-slider">
                        <?php while (have_rows('slider')) : the_row();
                            $image = get_sub_field('image'); ?>
                            <div class="item"><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"></div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>

    </div>




</section>