<?php get_header();
$featured_image_url = get_the_post_thumbnail_url($post_id, 'full'); ?>
<div id="fullpage">
  <div class="section hero_section">
    <div class="Hero">
      <div class="heroImage" style="background-image: url('<?php echo $featured_image_url; ?>'); background-position: center center; background-size: cover; width: 100%; height: 100%;"></div>
      <div class="Hero_textBoxWrapper">
        <h1 class="h3 Headline"><?php the_title() ?></h1>
        <div class="divider" ></div>
      </div>
    </div>
  </div>
  <?php if (have_rows('sections', $id)) :
    while (have_rows('sections', $id)) : the_row();
      get_template_part('flex-templates/' . get_row_layout());
    endwhile;
  endif; ?>
</div>
<?php get_footer(); ?>

<script>

</script>