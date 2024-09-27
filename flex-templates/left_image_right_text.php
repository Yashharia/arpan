<?php

$sub_heading = get_sub_field('sub_heading');
$text = get_sub_field('text');
$image = get_sub_field('image');
?>
<section class="left_image_right_text">

    <div class="container">

        <div class="row-wrap">
            <div class="image-wrapper">
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
            </div>
            <div class="text-wrapper">
                <?php if (!empty($sub_heading)) : ?>
                    <p class="sub-heading"><?php echo $sub_heading; ?></p>
                <?php endif; ?>
                <?php if (!empty($text)) : ?>
                    <h2><?php echo $text; ?></h2>
                <?php endif; ?>
            </div>

        </div>

    </div>




</section>