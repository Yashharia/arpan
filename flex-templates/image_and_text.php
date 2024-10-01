<?php

$sub_heading = get_sub_field('sub_heading');
$content = get_sub_field('content');
$cta = get_sub_field('cta');
$image = get_sub_field('image');
$style = get_sub_field('style');
$image_position = get_sub_field('image_position');
if (!empty($image) || !empty($content)) : ?>
    <section class="alternate-image-content <?php echo "$image_position $style" ?>">
        <div class="container">
            <div class="row-wrap alternate-image-content-wrap">
                <?php if (!empty($image)) : ?>
                    <div class="box-12 box-lg-6 image-wrap">
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>
                <?php endif; ?>


                <?php if (!empty($content)) : ?>
                    <div class="box-12 box-lg-6 content-wrap">
                        <div class="inner-wrap">
                            <?php if (!empty($sub_heading)): ?>
                                <p class="sub-heading"><?php echo $sub_heading ?></p>
                            <?php endif; ?>
                            <?php echo $content ?>
                            <?php if (!empty($cta)): ?>
                                <a href="<?php echo $cta['url'] ?>" <?php echo ($cta['target']) ? 'target="_blank"' : ""; ?> class="cta-button" title="<?php echo $cta['title'] ?>"><?php echo $cta['title'] ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>