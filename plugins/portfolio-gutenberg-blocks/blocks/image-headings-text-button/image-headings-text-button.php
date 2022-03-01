<?php

$id = 'logos-list-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'logos-list-';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

?>

<section class="image-headings-text-button background-beige">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
            <picture>
                <source
                    srcset="<?php echo get_template_directory_uri() . '/images/pic@2x.webp 2x'; ?>, <?php echo get_template_directory_uri() . '/images/pic@1x.webp'; ?>"
                    media="(max-width: 375px)"
                >
                <source
                    srcset="<?php echo get_template_directory_uri() . '/images/Bitmap@2x.webp'; ?>, <?php echo get_template_directory_uri() . '/images/Bitmap@1x.webp'; ?>"
                    media="(min-width: 376px)"
                >
                <img srcset="<?php echo get_template_directory_uri() . '/images/pic@1x.webp'; ?>" src="<?php echo get_template_directory_uri() . '/images/pic@1x.webp"' ?> alt="">
            </picture>
            </div>
            <div class="col-12 col-md-6">

            <div class="headings-text headings-text--colors-dark headings-text--size-medium">
                <h3 class="headings-text__small-above"><?php the_field('small-heading-above'); ?></h3>
                <h1 class="headings-text__big headings-text__big--size-medium"><?php the_field('big-heading'); ?></h1>
                <h3 class="headings-text__small-below"><?php the_field('small-heading-below'); ?></h3>
                <p class="headings-text__paragraph"><?php the_field('paragraph'); ?></p>
                <a href="<?php the_field('button__link'); ?>" class="button button--white-with-shadow button--width-narrow"><?php the_field('button__caption'); ?></a>
            </div>

            </div>
        </div>
    </div>
</section>