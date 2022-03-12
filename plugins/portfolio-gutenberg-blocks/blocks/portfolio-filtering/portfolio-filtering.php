<?php

  $id = 'portfolio-filtering-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  $className = 'portfolio-filtering-';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }

  $backgroundColor = get_field('background-color');

  if (!isset($blockNumber)){
    $blockNumber = 1;
  } else {
    $blockNumber++;
  }

  
 
?>

<section class="portfolio-filtering background-<?php echo $backgroundColor; ?> <?php echo esc_attr($className); ?>" id="<?php echo esc_attr($id); ?>">
        <div class="container">
            <div class="row">
                <div class="col-12 col--padding-xs-x">

                <div class="headings-text headings-text--colors-light headings-text--size-medium headings-text--align-center">
                        <h3 class="headings-text__small-above">Portfolio</h3>
                        <h2 class="headings-text__big headings-text__big--size-medium">Latest work</h2>
                    </div>
                    <?php
                      $cat_args = array (
                        'taxonomy' => 'category',
                      );
                      $categories = get_categories ( $cat_args );
                      $totalPortfolioPosts = $count_posts = wp_count_posts( 'portfolio' )->publish;

                      if ($totalPortfolioPosts) : 

                        // var_dump($categories);

                          foreach ( $categories as $category ) {
                            $cat_query = null;
                            $args = array (
                              'order' => 'ASC',
                              'orderby' => 'title',
                              'posts_per_page' => -1,
                              'post_type' => 'portfolio',
                              'taxonomy' => 'category',
                              'term' => $category->slug
                            );

                            $cat_query = new WP_Query( $args );
                            $portfolioCategoriesList;
                            $portfolioCategoriesDropdown;

                            if ( $cat_query->have_posts() ) {
                              $portfolioCategoriesList .= '<li class="portfolio-filtering__categories-item" data-id="'. $category->term_id .'">'. $category->name .'<span>'. $category->count .'</span></li>';
                              $portfolioCategoriesDropdown .= '<li class="portfolio-filtering__categories-item dropdown" data-id="'. $category->term_id .'" href="">'. $category->name .' ('. $category->count .')</li>';
                            }
                            wp_reset_postdata();
                          };
                        endif;
                      ?>

                        <ul class="portfolio-filtering__categories">  
                          <li class="portfolio-filtering__categories-item" data-id="all">Show all<span><?php echo $totalPortfolioPosts; ?></span></li>
                          <?php echo $portfolioCategoriesList; ?>
                        </ul>

                    <div class="portfolio-filtering__categories-dropdown dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li class="portfolio-filtering__categories-item dropdown" data-id="all" href="#">Show all</li>
                      <?php echo $portfolioCategoriesDropdown; ?>
                    </ul>
                    </div>

                    <div class="portfolio-filtering__posts">
                      <a href="" class="portfolio-filtering__post"><h4>Design</h4><h3>Sofa</h3></a>
                      <a href="" class="portfolio-filtering__post portfolio-filtering__post--wide"><h4>Design</h4><h3>Sofa</h3></a>
                      <a href="" class="portfolio-filtering__post portfolio-filtering__post--wide"><h4>Design</h4><h3>Sofa</h3></a>
                      <a href="" class="portfolio-filtering__post"><h4>Design</h4><h3>Sofa</h3></a>
                    </div>

                    <div class="portfolio-filtering__button">Explore more</div>

                </div>
            </div>
        </div>
    </section>