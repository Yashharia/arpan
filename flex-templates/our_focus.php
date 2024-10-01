<?php
$grid = get_sub_field('grid');
$sub_heading = get_sub_field('sub_heading');
$heading = get_sub_field('heading');
$text = get_sub_field('text');
if (have_rows('cards')) : ?>
    <section class="our_focus">
        <div class="container">
            <?php if (!empty($heading)) : ?>
                <div class="section-heading text-center">
                    <div class="inner-wrap">
                        <div class="heading-wrapper">
                            <?php if (!empty($sub_heading)): ?>
                                <p class="sub-heading"><?php echo $sub_heading ?></p>
                            <?php endif; ?>
                            <h2><?php echo $heading ?></h2>
                        </div>
                        <div class="sub-text-wrapper">
                            <?php echo $text; ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row-wrap cards-wrapper">

                <?php while (have_rows('cards')) : the_row();
                    $image = get_sub_field('image');
                    $icon = get_sub_field('icon');
                    $card_heading = get_sub_field('card_heading');
                    $card_content = get_sub_field('card_content');
                    if (!empty($image) || !empty($card_content) || !empty($card_heading)) : ?>
                        <div class="box-12">
                            <div class="card-focus">

                                <?php if (!empty($image)) : ?>
                                    <div class="card-image">
                                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                                    </div>
                                <?php endif; ?>

                                <div class="card-content">

                                    <?php if (!empty($card_heading)) : ?>
                                        <div class="heading-wrapper">
                                            <div class="icon"><img class="icon-image" src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>"></div>
                                            <h3><?php echo $card_heading ?></h3>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($card_content)): ?>
                                        <p><?php echo $card_content ?></p>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>

                <?php endif;
                endwhile; ?>

            </div>
        </div>
    </section>
<?php endif; ?>