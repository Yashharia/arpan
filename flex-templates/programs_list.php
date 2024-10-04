<?php
$heading = get_sub_field('heading');
$programs = get_sub_field('programs');
$auto = get_sub_field('auto');
if ($auto) {
    $programs = [];
    $args = array(
        'post_type' => 'program',
        'post_status' => array('publish'),
        'posts_per_page' => -1,
    );
    $the_query = new WP_Query($args);
    $programs_result = $the_query->posts;
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) :
            $the_query->the_post();
            $programs[] = get_the_ID();
        endwhile;
    endif;
    wp_reset_postdata();
}
?>
<?php if (!empty($programs)) { ?>
    <section class="programs_list">


        <div class="content-wrap">

            <div class="inner-wrap">
                <?php $count = 0;
                foreach ($programs as $program_id) {
                    $title = get_the_title($program_id);
                    $permalink = get_permalink($program_id);
                    $featured_image = get_the_post_thumbnail_url($program_id);
                ?>
                    <div class="program_row">
                        <div class="container">
                            <div class="row-wrap">

                                <div class="text-wrapper box-12 box-md-5">
                                    <?php if (!empty($heading) && $count == 0) : ?>
                                        <h2> <?php echo $heading; ?></h2>
                                    <?php endif; ?>
                                </div>

                                <div class="box-12 box-md-7">
                                    <div class="program-card">
                                        <?php if (!empty($featured_image)): ?>
                                            <div class="image-wrapper">
                                                <a href="<?php echo $permalink ?>"><img src="<?php echo $featured_image ?>" alt="<?php echo $title ?>"></a>
                                            </div>
                                        <?php endif; ?>

                                        <a href="<?php echo $permalink ?>">
                                            <h3 class="title-head"><?php echo $title ?>&nbsp;<i class='fa fa-angle-right icon-right'></i></h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $count++;
                } ?>

            </div>

        </div>






    </section>
<?php } ?>