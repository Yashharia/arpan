<?php

$sub_heading = get_sub_field('sub_heading');
$heading = get_sub_field('heading');
$content = get_sub_field('content');
$cta_1 = get_sub_field('cta_1');
$cta_2 = get_sub_field('cta_2');
?>
<section class="download-cta">

    <div class="container small-container">

        <div class="row-wrap">

            <div class="box-12 box-md content-wrap text-center">

                <div class="inner-wrap">
                    <?php if (!empty($sub_heading)) : ?>
                        <p class="sub-heading"><?php echo $sub_heading; ?></p>
                    <?php endif; ?>
                    <?php if (!empty($heading)) : ?>
                        <h2><?php echo $heading; ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($content)) : ?>
                        <p><?php echo $content; ?></p>
                    <?php endif; ?>

                    <div class="cta-wrapper">
                        <?php if (!empty($cta_1)): ?>
                            <a href="<?php echo $cta_1['url'] ?>" <?php echo ($cta_1['target']) ? 'target="_blank"' : ""; ?> class="cta-button cta-green" title="<?php echo $cta_1['title'] ?>"><?php echo $cta_1['title'] ?></a>
                        <?php endif; ?>
                        <?php if (!empty($cta_2)): ?>
                            <a href="<?php echo $cta_2['url'] ?>" <?php echo ($cta_2['target']) ? 'target="_blank"' : ""; ?> class="cta-button" title="<?php echo $cta_2['title'] ?>"><?php echo $cta_2['title'] ?></a>
                        <?php endif; ?>
                    </div>

                </div>

            </div>

        </div>

    </div>

   


</section>