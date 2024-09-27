<?php

$sub_heading = get_sub_field('sub_heading');
$heading = get_sub_field('heading');
$text = get_sub_field('text');
$cta = get_sub_field('cta');
?>
<section class="slider_section">

    <div class="container">

        <div class="row-wrap">

            <div class="section-heading">
                <div class="inner-wrap">
                    <div class="text-wrapper">
                        <?php if (!empty($sub_heading)): ?>
                            <h6 class="sub-heading"><?php echo $sub_heading ?></h6>
                        <?php endif; ?>
                        <h3 class="h1"><?php echo $heading ?></h3>
                    </div>
                    <?php if (!empty($cta)): ?>
                        <div class="cta-wrapper">
                            <a href="<?php echo $cta['url'] ?>" <?php echo ($cta['target']) ? 'target="_blank"' : ""; ?> class="cta-button" title="<?php echo $cta['title'] ?>"><?php echo $cta['title'] ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="slider-container container">
            <div class="left-side"></div>
            <?php if (have_rows('cards')) : ?>
                <div class="right-slider js-right-slider">
                    <?php while (have_rows('cards')) : the_row();
                        $image = get_sub_field('image');
                        $link = get_sub_field('link');
                    ?>
                        <div class="item slider-card">
                            <a href="<?php echo $link['url'] ?>" <?php echo ($link['target']) ? 'target="_blank"' : ""; ?>>
                                <img src="<?php echo $image['url'] ?>" class="card-image" alt="<?php echo $image['alt'] ?>">
                                <div class="link-wrapper"><?php echo $link['title'] ?></div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>




</section>