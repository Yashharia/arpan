<?php
$sub_heading = get_sub_field('sub_heading');
$heading = get_sub_field('heading');
$buttons = get_sub_field('buttons');
?>
<section class="signposts">

    <div class="container">

        <div class="content-wrap text-center">

            <div class="content text-wrapper">
                <?php if (!empty($sub_heading)) : ?>
                    <p class="sub-heading"><?php echo $sub_heading ?></p>
                <?php endif; ?>
                <?php if (!empty($heading)) : ?>
                    <h3 class="section-heading"><?php echo $heading ?></h3>
                <?php endif; ?>
            </div>

            <?php if (have_rows('buttons')) : ?>
                <div class="signposts-list">
                    <?php while (have_rows('buttons')) : the_row();
                        $heading = get_sub_field('heading');
                        $sub_text = get_sub_field('sub_text');
                        $numbers = get_sub_field('numbers'); ?>

                        <div class="link">
                            <div class="number-wrapper">
                                <span class="number">
                                    <?php echo $numbers ?>
                                </span>
                            </div>
                            <div class="text-wrapper">
                                <h3> <?php echo $heading ?> </h3>
                                <p class="sub-text"><?php echo $sub_text ?></p>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>

    </div>

</section>