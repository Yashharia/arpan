<?php get_header();
$featured_image_url = get_the_post_thumbnail_url($id, 'full'); ?>
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