<?php
$content = get_sub_field('content');
$image = get_sub_field('image');
?>
<section class="programs_hero">

    <div class="container">


        <div class="content-wrap">

            <div class="inner-wrap">


                <?php if (!empty($content)) : ?>
                    <div class="text-wrapper">
                        <?php echo $content; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($image)): ?>
                    <div class="image-wrapper">
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>
                <?php endif; ?>

            </div>

        </div>


    </div>




</section>