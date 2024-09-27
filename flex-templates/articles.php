<?php
$sub_heading = get_sub_field('sub_heading');
$heading = get_sub_field('heading');
$cta = get_sub_field('cta');
$auto = get_sub_field('auto');
$posts = get_sub_field('posts');
if ($auto) :
    $posts = [];
    $id = $post->ID;
    $args = array(
        'post_type' => 'post',
        'post__not_in' => array($id),
        'posts_per_page' => 3,
    );

    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $posts[] = get_the_ID();
        }
    }
    wp_reset_postdata();
endif; ?>
<?php if (!empty($heading) || !empty($posts)) : ?>
    <section class="related-articles">
        <div class="group-result">
            <div class="group-result-wrap">
                <div class="articles-section">
                    <div class="container">
                        <?php if (!empty($heading)) : ?>
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
                        <?php endif; ?>

                        <?php 
                        if (!empty($posts)) : ?>
                            <div class="article-list">
                                <?php foreach ($posts as $single_id) :
                                    get_template_part('flex-templates/template-parts/card', 'article', array('id' => $single_id));
                                endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>