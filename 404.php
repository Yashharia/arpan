<?php get_header();
$heading = get_field('404_heading', 'option');
$text = get_field('404_text', 'option');
$image = get_field('404_image', 'option');

?>
<div class="Page404_notFound 1KzSh">
    <div class="Page404_textBoxWrapper 2uHyo">
        <?php if (!empty($heading)) : ?>
            <h1><?php echo $heading ?></h1>
        <?php endif; ?>
        <?php if (!empty($text)) : ?>
            <p><?php echo $text ?></p>
        <?php endif; ?>
    </div>
    <div class="Page404_modelContainer"><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
        <svg viewBox="0 0 600 600" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <circle id="Oval" cx="300" cy="300" r="300" style="fill: rgb(206, 232, 242);"></circle>
        </svg>
    </div>
</div>
<?php get_footer(); ?>