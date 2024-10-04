<?php
$heading = get_sub_field('heading');
$contact_form_shortcode = get_sub_field('contact_form_shortcode');
$map_iframe = get_sub_field('map_iframe');
$cta = get_sub_field('cta'); ?>

<section class="contact_section">
    <div class="container">
        <div class="row-wrap contact-list-wrap">
            <div class="box-12 box-md-6">
                <?php if (!empty($heading)): ?>
                    <h2><?php echo $heading ?></h2>
                <?php endif; ?>
                <?php if (have_rows('lists')) : ?>
                    <div class="contact-list">
                        <?php while (have_rows('lists')) : the_row();
                            $icon = get_sub_field('icon');
                            $content = get_sub_field('content'); ?>
                            <div class="contact-item">
                                <div class="row-wrap">
                                    <div class="icon"><img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>"></div>
                                    <div class="contact-content"><?php echo $content ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="box-12 box-md-6 form-parent-wrap">
                <div class="form-wrapper">
                    <?php echo do_shortcode($contact_form_shortcode) ?>
                </div>
            </div>
        </div>
        <?php if (!empty($map_iframe)): ?>
            <div class="row-wrap">

                <div class="box-12">
                    <div class="iframe-wrapper">
                        <?php if (!empty($cta)): ?>
                            <a href="<?php echo $cta['url'] ?>" <?php echo ($cta['target']) ? 'target="_blank"' : ""; ?> class="cta-button" title="<?php echo $cta['title'] ?>"><?php echo $cta['title'] ?></a>
                        <?php endif; ?>
                        <?php echo $map_iframe; ?>

                    </div>
                </div>
            </div>

        <?php endif; ?>
    </div>
</section>