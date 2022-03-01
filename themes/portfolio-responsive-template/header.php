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
          <picture>
            <source
              srcset="./images/header-mobile-2x.png 2x, ./images/header-mobile.png"
              media="(max-width: 375px)"
            >
            <source
              srcset="./images/header-desktop@2x.png 2x, ./images/header-desktop.png"
              media="(min-width: 376px)"
            >
            <img srcset="./images/header-desktop.png" src="./images/header-desktop.png" alt="">
          </picture>
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
              <img src="./images/person-small.png" alt="Person Small Jr.">
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