<?php
$grid = get_sub_field('grid');
$heading = get_sub_field('heading');
$sub_text = get_sub_field('sub_text');
$cta = get_sub_field('cta');
$col_class = "box-md-6";
if ($grid == "three-columns") $col_class = "box-md-4";
if ($grid == "four-columns") $col_class = "box-md-3";
if (have_rows('cards')) : ?>
    <section class="benefits <?php echo $grid ?>">
        <div class="container">

            <?php if (!empty($heading)) : ?>
                <div class="section-heading">
                    <div class="inner-wrap">
                        <div class="heading-wrapper">
                            <?php echo $heading ?>
                        </div>
                        <div class="sub-text-wrapper">
                            <?php echo $sub_text; ?>
                            <?php if (!empty($cta)): ?>
                                <div class="cta-wrapper">
                                    <a href="<?php echo $cta['url'] ?>" <?php echo ($cta['target']) ? 'target="_blank"' : ""; ?> class="cta-button" title="<?php echo $cta['title'] ?>"><?php echo $cta['title'] ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row-wrap">

                <?php while (have_rows('cards')) : the_row();
                    $image = get_sub_field('image');
                    $link = get_sub_field('link');
                    $heading = get_sub_field('heading');
                    if (!empty($image) || !empty($content) || !empty($heading)) : ?>
                        <div class="box-6 <?php echo $col_class ?>">
                            <div class="card-benefits">

                                <?php if (!empty($image)) : ?>
                                    <div class="card-image">
                                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                                    </div>
                                <?php endif; ?>

                                <div class="card-content">
                                    <?php if (!empty($heading)) : ?>
                                        <h3><?php echo $heading ?></h3>
                                    <?php endif; ?>
                                    <?php if (!empty($link)) : ?>
                                        <a href="<?php echo $link['url'] ?>" <?php echo ($link['target']) ? 'target="_blank"' : ""; ?>><?php echo $link['title'] ?></a>
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