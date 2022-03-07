<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <?php
    wp_head();
?>
</head>

<body>
  <header class="background-darkblue">
    <div class="container">
      <div class="row">
        <div class="col">
          <nav class="navbar">
            <a href="" class="navbar__brand">
              <img src="<?php echo get_template_directory_uri() . '/images/logo.svg' ?>" alt="logo">
              <h2>Agency</h2>
            </a>
            <?php 
                wp_nav_menu(
                    array( 
                        'theme_location' => 'header-menu', 
                        'menu_class' => 'navbar__main-menu',  
                        'container' => ''
                    )
                ); 
            ?>
            
            <div class="navbar__toggler-button">
              <button class="navbar__toggler">
                <span></span>
                <span></span>
                <span></span>
              </button>

              <a href="#"class="button button--light-no-background button--width-narrow">
                Contact
              </a>
            </div>
          </nav>
        </div>
      </div>
      <div class="row header-content">
        <div class="col col-sm-4 col-md-6 col--padding-xs-x">
          
          <?php 
            $imageDesktop = get_field('header-image-desktop', 'options');

            if( !empty( $imageDesktop ) ):
              $alt = $imageDesktop['alt'];
              $desktop2x = $imageDesktop['sizes'][ 'header-desktop-2x' ];
              $desktop1x = $imageDesktop['sizes'][ 'header-desktop-1x' ];
          ?>
          <picture>
            

            <?php
              $imageMobile = get_field('header-image-mobile', 'options');
              if( !empty( $imageMobile ) ):
                $mobile2x = $imageMobile['sizes'][ 'header-mobile-2x' ];
                $mobile1x = $imageMobile['sizes'][ 'header-mobile-1x' ];
              ?>
              <source srcset="<?php echo $mobile2x; ?> 2x,  <?php echo $mobile1x; ?>" media="(max-width: 375px)">
              <source srcset="<?php echo $desktop2x; ?> 2x,  <?php echo $desktop2x; ?>" media="(min-width: 375px)">
            <?php endif; ?>

            <img src="<?php echo $desktop1x; ?>" alt="<?php echo $imageDesktop['alt']; ?>">
          </picture>
          <?php endif; ?>
  
        </div>
        <div class="col col-sm-8 col-md-6 col--padding-xs-x">
          <div class="headings-text headings-text--colors-light headings-text--size-big">
            <h3 class="headings-text__small-above"><?php the_field('small-heading', 'options'); ?></h3>
            <h1 class="headings-text__big"><?php the_field('big-heading', 'options'); ?></h1>
            <p class="headings-text__paragraph"><?php the_field('paragraph', 'options'); ?></p>
            <div class="buttons">
              <a href="<?php the_field('button-1__url', 'options'); ?>" class="button button--color button--width-medium"><?php the_field('button-1__text', 'options'); ?></a>
                <?php if (get_field('button-2__enable', 'options') ) : ?>
                    <a href="<?php the_field('button-2__url', 'options'); ?>" class="button button--normal-link button--width-wide"><?php the_field('button-2__text', 'options'); ?></a>
                <?php endif; ?>
            </div>  
          </div>

          <div class="person-quote person-quote--small person-quote--light">
            <div class="person-quote__image">
            <?php 
              $imagePerson = get_field('quotation__photo', 'options');
              if( !empty( $imagePerson ) ): ?>
                  <img src="<?php echo esc_url($imagePerson['url']); ?>" alt="<?php echo esc_attr($imagePerson['alt']); ?>" />
            <?php endif; ?>
            </div>
            <div class="person-quote__text">
              <p class="person-quote__text-quote">"Put themselves in the merchant's shoes"</p>
              <p class="person-quote__text-person">Meta Inc.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>