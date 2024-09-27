<?php

$sub_heading = get_sub_field('sub_heading');
$heading = get_sub_field('heading');
$text = get_sub_field('text');
$cta = get_sub_field('cta');
?>
<section class="about_us_hero">

    <div class="container">

        <div class="row-wrap">

            <div class="content-wrap text-center">

                <div class="inner-wrap">
                    <?php if (!empty($sub_heading)) : ?>
                        <p class="sub-heading"><?php echo $sub_heading; ?></p>
                    <?php endif; ?>
                    <?php if (!empty($heading)) : ?>
                        <h2><?php echo $heading; ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($text)) : ?>
                        <p><?php echo $text; ?></p>
                    <?php endif; ?>

                    <div class="cta-wrapper">
                        <?php if (!empty($cta)): ?>
                            <a href="<?php echo $cta['url'] ?>" <?php echo ($cta['target']) ? 'target="_blank"' : ""; ?> class="cta-button " title="<?php echo $cta['title'] ?>"><?php echo $cta['title'] ?></a>
                        <?php endif; ?>
                    </div>

                </div>

            </div>

        </div>

        <?php if (have_rows('cards')) : ?>
            <div class="images-wrapper">
                <?php $count = 1;
                while (have_rows('cards')) : the_row();
                    $image = get_sub_field('image');
                    $text = get_sub_field('text');
                     ?>
                    <div class="item item-<?php echo $count ?>">
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                        <div class="sub-text">
                            <p><?php echo $text ?></p>
                        </div>
                    </div>
                <?php $count++;
                endwhile; ?>
            </div>
        <?php endif; ?>


    </div>




</section>