<?php
$currentID = $args['id'];
$parent_class = (!empty($args['parent_class'])) ? $args['parent_class'] : "article-item";
$card_class = (!empty($args['card_class'])) ? $args['card_class'] : "article-card";
$title = get_the_title($currentID);
$permalink = get_permalink($currentID);
$excerpt = get_the_excerpt($currentID);
$featured_image = get_the_post_thumbnail_url($currentID);
?>
<div class="<?php echo $parent_class ?>">
    <div class="<?php echo $card_class ?>">

        <div class="card-image">
            <a href="<?php echo $permalink ?>">
                <?php echo get_the_post_thumbnail($currentID) ?>
            </a>
        </div>

        <div class="card-content">
            <a href="<?php echo $permalink ?>">
                <h4><?php echo $title; ?></h4>
            </a>
            <?php if (!empty($excerpt)) : ?>
                <p><?php echo $excerpt; ?></p>
            <?php endif; ?>
            <a href="<?php echo $permalink; ?>" class="cta-link">Read More ›</a>
        </div>

    </div>
</div>