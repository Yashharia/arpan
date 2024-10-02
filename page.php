<?php get_header();
$has_popup = get_field('has_popup');
$heading = get_field('heading');
$text = get_field('text');
?>
<div id="fullpage">
    <?php if (have_rows('sections', $id)) :
        while (have_rows('sections', $id)) : the_row();
            get_template_part('flex-templates/' . get_row_layout());
        endwhile;
    endif; ?>
</div>

<?php get_footer(); ?>

<script>

</script>