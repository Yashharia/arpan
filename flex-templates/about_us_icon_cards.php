<?php
$grid = get_sub_field('grid');
$heading = get_sub_field('heading');
$sub_text = get_sub_field('sub_text');
$cta = get_sub_field('cta');
$col_class = "box-md-6";
if (have_rows('cards')) : ?>
    <section class="about_us_icon_cards">
        <div class="container">

            <?php if (!empty($heading)) : ?>
                <div class="section-heading">
                    <div class="inner-wrap">
                        <div class="heading-wrapper">
                            <?php echo $heading ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="grid-wrap masonry">

                <?php while (have_rows('cards')) : the_row();
                    $image = get_sub_field('image');
                    $content = get_sub_field('content');
                    if (!empty($image) || !empty($content)) : ?>
                        <div class="grid-item">
                            <div class="card-benefits">

                                <?php if (!empty($image)) : ?>
                                    <div class="card-image">
                                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                                    </div>
                                <?php endif; ?>

                                <div class="card-content">
                                    <?php if (!empty($content)) : ?>
                                        <p><?php echo $content ?></p>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>

                <?php endif;
                endwhile; ?>

            </div>
        </div>
        <img src="../assets/images/benefits-bg.svg" role="presentation" class="benefits-bg" alt="">
    </section>
<?php endif; ?>