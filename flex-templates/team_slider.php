<?php

$sub_heading = get_sub_field('sub_heading');
$heading = get_sub_field('heading');
$text = get_sub_field('text');
$cta = get_sub_field('cta');
?>
<section class="team_slider">

    <div class="container">

        <div class="row-wrap">

            <div class="section-heading">
                <div class="inner-wrap">
                    <div class="text-wrapper">
                        <?php if (!empty($sub_heading)): ?>
                            <h6 class="sub-heading"><?php echo $sub_heading ?></h6>
                        <?php endif; ?>
                        <h3 class="h2"><?php echo $heading ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-container container">
            <div class="left-side"></div>
            <?php if (have_rows('Team')) : ?>
                <div class="right-slider js-team-slider">
                    <?php while (have_rows('Team')) : the_row();
                        $image = get_sub_field('image');
                        $name = get_sub_field('name');
                        $designation = get_sub_field('designation');
                        $facebook = get_sub_field('facebook');
                        $twitter = get_sub_field('twitter');
                        $instagram = get_sub_field('instagram');
                        $linkedin = get_sub_field('linkedin');
                    ?>
                        <div class="item slider-card">
                            <img src="<?php echo $image['url'] ?>" class="card-image" alt="<?php echo $image['alt'] ?>">
                            <div class="details-wrapper">
                                <h4 class="name"><?php echo $name ?></h4>
                                <p class="designation"><?php echo $designation ?></p>
                                <div class="social-icons">
                                    <a href="<?php echo $facebook ?>" target="_blank"><img src="<?php echo get_template_directory_uri(  ) ?>/assets/images/facebook.svg" alt="facebook icon"></a>
                                    <a href="<?php echo $twitter ?>" target="_blank"><img src="<?php echo get_template_directory_uri(  ) ?>/assets/images/twitter.svg" alt="twitter icon"></a>
                                    <a href="<?php echo $instagram ?>" target="_blank"><img src="<?php echo get_template_directory_uri(  ) ?>/assets/images/instagram.svg" alt="instagram icon"></a>
                                    <a href="<?php echo $linkedin ?>" target="_blank"><img src="<?php echo get_template_directory_uri(  ) ?>/assets/images/linkedin.svg" alt="linkedin icon"></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>




</section>