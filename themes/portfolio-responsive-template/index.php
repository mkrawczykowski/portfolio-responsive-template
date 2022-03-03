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


    <section class="portfolio-filtering background-darkblue">
        <div class="container">
            <div class="row">
                <div class="col-12 col--padding-xs-x">

                <div class="headings-text headings-text--colors-light headings-text--size-medium headings-text--align-center">
                        <h3 class="headings-text__small-above">test</h3>
                        <h2 class="headings-text__big headings-text__big--size-medium">heading</h2>
                    </div>

                    <ul class="portfolio-filtering__categories">
                        <li><a href="#" data-slug="all">Show all<span>12</span></a></li>
                        <li><a href="#" data-slug="design">Design<span>3</span></a></li>
                        <li><a href="#" data-slug="branding">Branding<span>9</span></a></li>
                        <li><a href="#" data-slug="illustration">Illustration<span>11</span></a></li>
                        <li><a href="#" data-slug="motion">Motion<span>4</span></a></li>
                    </ul>

                    <div class="portfolio-filtering__categories-dropdown dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </div>

                    <div class="portfolio-filtering__posts">
                        <div class="portfolio-filtering__posts-row portfolio-filtering__posts-row--right-wider">
                            <a href="" class="portfolio-filtering__post"><h4>Design</h4><h3>Sofa</h3></a>
                            <a href="" class="portfolio-filtering__post"><h4>Design</h4><h3>Sofa</h3></a>
                        </div>
                        <div class="portfolio-filtering__posts-row portfolio-filtering__posts-row--left-wider">
                            <a href="" class="portfolio-filtering__post"><h4>Design</h4><h3>Sofa</h3></a>
                            <a href="" class="portfolio-filtering__post"><h4>Design</h4><h3>Sofa</h3></a>
                        </div>
                    </div>

                    <div class="portfolio-filtering__button">Explore more</div>

                </div>
            </div>
        </div>
    </section>





</main>

<?php
    get_footer();
?>