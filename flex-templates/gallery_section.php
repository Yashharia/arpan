<?php

$sub_heading = get_sub_field('sub_heading');
$heading = get_sub_field('heading');
$text = get_sub_field('text');
$cta = get_sub_field('cta');
$style = get_sub_field('images_position_style');
$type = get_sub_field('type');
?>
<section class="gallery_section <?php echo $style ?>">

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


        <?php if ($type == "image"):
            if (have_rows('images')) : ?>
                <div class="images-wrapper ">
                    <?php $count = 1;
                    while (have_rows('images')) : the_row();
                        $image = get_sub_field('image'); ?>
                        <div class="item item-<?php echo $count ?>"><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"></div>
                    <?php $count++;
                    endwhile; ?>
                </div>
            <?php endif;
        else:
            if (have_rows('videos')) : ?>
                <div class="images-wrapper type-video">
                    <?php $count = 1;
                    while (have_rows('videos')) : the_row();
                        $image = get_sub_field('image');
                        $youtube_iframe_url = get_sub_field('youtube_iframe_url');
                    ?>
                        <div class="item item-<?php echo $count ?>">
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                            <a class="popup-youtube play-button" href="<?php echo $youtube_iframe_url; ?>">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/playbutton.svg" alt="">
                            </a>
                        </div>
                    <?php $count++;
                    endwhile; ?>
                </div>
        <?php endif;
        endif; ?>


    </div>




</section>