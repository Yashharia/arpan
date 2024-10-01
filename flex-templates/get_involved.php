<?php
$sub_heading = get_sub_field('sub_heading');
$heading = get_sub_field('heading'); ?>
<?php if (!empty($heading)): ?>
    <section class="get_involved">

        <div class="container">
            <?php if (!empty($heading)) : ?>
                <div class="section-heading text-center">
                    <div class="inner-wrap">
                        <div class="text-wrapper">
                            <?php if (!empty($sub_heading)): ?>
                                <h6 class="sub-heading"><?php echo $sub_heading ?></h6>
                            <?php endif; ?>
                            <h3 class="h1"><?php echo $heading ?></h3>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (have_rows('cards')) : ?>
                <div class="cards-wrapper">
                    <?php while (have_rows('cards')) : the_row(); ?>

                        <?php $image = get_sub_field('image');
                        $heading = get_sub_field('heading');
                        $sub_text = get_sub_field('sub_text'); ?>

                        <div class="get_involved-card card">
                            <div class="image-wrapper">
                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                            </div>
                            <div class="content-wrapper">
                                <?php if (!empty($heading)): ?>
                                    <h3><?php echo $heading ?></h3>
                                <?php endif; ?>
                                <?php if (!empty($sub_text)): ?>
                                    <p><?php echo $sub_text ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </section>
<?php endif; ?>