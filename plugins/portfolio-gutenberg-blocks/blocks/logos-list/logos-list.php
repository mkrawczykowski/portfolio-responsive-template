<?

$id = 'logos-list-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'logos-list-';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( have_rows('logos') ): 
    $backgroundColor = get_field('background-color');
?>
    <section class="logos-list background-<?php echo $backgroundColor; ?>" id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <div class="container">
            <div class="row">
                <div class="col col--padding-xs-x">
                    <ul class="logos-list__list">
                        <?php
                            while( have_rows('logos') ) : the_row();

                                $imageFile = get_sub_field('logos__image-file'); 
                                if( !empty( $imageFile ) ): ?>
                                    <li><img src="<?php echo esc_url($imageFile['url']); ?>" alt="<?php echo esc_attr($imageFile['alt']); ?>" /></li>
                                <?php endif; ?>
                                
                            <?php
                            endwhile;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
