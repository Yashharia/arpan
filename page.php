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
<?php if (!empty($has_popup)) : ?>
    <div class="page_popup popup_parent">
        <div class=" Popup_Backdrop active"></div>
        <div class="message">
            <button class="CloseButton"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" preserveAspectRatio="slice xMidYMid" style="color: rgb(61, 62, 64); margin: auto 0px;">
                    <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
                </svg></button>
            <h3><?php echo $heading ?></h3>
            <div class="divider"></div>
            <?php echo $text ?>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>

<script>

</script>