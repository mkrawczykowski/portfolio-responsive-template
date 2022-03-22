<?php
    get_header();
?>

<main>
    <?php
        the_content();
    ?>

    <section class="video-lightbox-content" data-video="M7lc1UVf-VE">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-6 col--padding-xs-x">
                    <div class="play-video-image">
                        <picture>
                            <source
                                srcset="<?php echo get_template_directory_uri() . '/images/video-mobile@2x.jpg 2x'; ?>, <?php echo get_template_directory_uri() . '/images/video-mobile@1x.jpg'; ?>"
                                media="(max-width: 570px)">
                            <source
                                srcset="<?php echo get_template_directory_uri() . '/images/video-desktop@2x.jpg'; ?>, <?php echo get_template_directory_uri() . '/images/video-desktop@1x.jpg'; ?>"
                                media="(min-width: 571px)">
                            <img srcset="<?php echo get_template_directory_uri() . '/images/video-desktop@1x.jpg'; ?>" src="<?php echo get_template_directory_uri() . '/images/video-desktop@1x.jpg"' ?> alt="">
                        </picture>
                        <div class="play-video-image__button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.6" height="28.152" viewBox="0 0 20.6 28.152"><path d="M14.383,2.224a2,2,0,0,1,3.235,0l12.072,16.6A2,2,0,0,1,28.072,22H3.928A2,2,0,0,1,2.31,18.824Z" transform="translate(22 -1.924) rotate(90)" fill="#fff"/></svg>
                        </div>
                        <div class="play-video-image__time">1:45</div>
                    </div>

                    <div class="video-lightbox-content__lightbox">
                        <div class="video-lightbox-content__lightbox-close">
                            <span></span>
                            <span></span>
                        </div>
                        <div class="video-lightbox-content__lightbox-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col col-12 col--padding-xs-x">
                                        <div class="video-lightbox-content__lightbox-video"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6">

                </div>
            </div>
        </div>
        <?php
            if (!function_exists('youtube_iframe_api')){
                function youtube_iframe_api(){
                    echo '<script src="https://www.youtube.com/iframe_api"></script>';
                }
                add_action('wp_footer', 'youtube_iframe_api');    
            }
        ?>
    </section>

    <section class="background-darkblue slider-team">
        <div class="container">
            <div class="row">
                <div class="col col-12  col--padding-xs-x">
                    <div class="headings-text headings-text--colors-light headings-text--size-medium">
                        <h3 class="headings-text__small-above">Our team</h3>
                        <h2 class="headings-text__big">Team of Designers<br>and Developers</h2>
                    </div>
                    <div class="slider-arrows-dots">
                        <div class="slider-arrows-dots__controls">
                            <a class="slider-arrows-dots__controls-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="9.001" viewBox="0 0 14.001 9.001"><path d="M14,4.5a.5.5,0,0,0-.5-.5H1.708L4.855.855A.5.5,0,1,0,4.147.147l-4,4a.5.5,0,0,0,0,.708l4,4a.5.5,0,0,0,.708-.708L1.708,5H13.5A.5.5,0,0,0,14,4.5Z" fill="#fff"/></svg>
                            </a>
                            <a class="slider-arrows-dots__controls-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="9.001" viewBox="0 0 14.001 9.001"><path d="M0,4.5A.5.5,0,0,1,.5,4H12.293L9.146.855A.5.5,0,0,1,9.854.147l4,4a.5.5,0,0,1,0,.708l-4,4a.5.5,0,0,1-.708-.708L12.293,5H.5A.5.5,0,0,1,0,4.5Z" fill="#fff"/></svg>
                            </a>
                        </div>
                        <ul class="slider-arrows-dots__slides">
                            <li class="slider-arrows-dots__slide">
                                <div class="slider-arrows-dots__slide-border">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person1@1x.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/person1@2x.png 2x">
                                </div>
                                <h3 class="slider-arrows-dots__slide-name">Michał Krawczykowski-Krawczykowski</h3>
                                <h4 class="slider-arrows-dots__slide-position">frontend developer</h4>
                            </li>
                            <li class="slider-arrows-dots__slide">
                                <div class="slider-arrows-dots__slide-border">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person2@1x.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/person2@2x.png 2x">
                                </div>
                                <h3 class="slider-arrows-dots__slide-name">Michał Krawczykowski</h3>
                                <h4 class="slider-arrows-dots__slide-position">frontend developer</h4>
                            </li>
                            <li class="slider-arrows-dots__slide">
                                <div class="slider-arrows-dots__slide-border">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person3@1x.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/person3@2x.png 2x">
                                </div>
                                <h3 class="slider-arrows-dots__slide-name">Michał Krawczykowski</h3>
                                <h4 class="slider-arrows-dots__slide-position">frontend developer</h4>
                            </li>
                            <li class="slider-arrows-dots__slide">
                                 <div class="slider-arrows-dots__slide-border">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person4@1x.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/person4@2x.png 2x">
                                </div>
                                <h3 class="slider-arrows-dots__slide-name">Michał Krawczykowski</h3>
                                <h4 class="slider-arrows-dots__slide-position">frontend developer</h4>
                            </li>
                            <li class="slider-arrows-dots__slide">
                                <div class="slider-arrows-dots__slide-border">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person1@1x.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/person1@2x.png 2x">
                                </div>
                                <h3 class="slider-arrows-dots__slide-name">Michał Krawczykowski</h3>
                                <h4 class="slider-arrows-dots__slide-position">frontend developer</h4>
                            </li>
                        </ul>
                        <ul class="slider-arrows-dots__dots">
                            <li class="slider-arrows-dots__dot"></li>
                            <li class="slider-arrows-dots__dot"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
    get_footer();
?>