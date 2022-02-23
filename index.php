<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./dist/main.css">
</head>

<body>
  <header class="background-darkblue">
    <div class="container">
      <div class="row">
        <div class="col">
          <nav class="navbar">
            <a href="" class="navbar__brand">
              <img src="./images/logo.svg" alt="Portfolio responsive template">
              <h2>Agency</h2>
            </a>
              
            <ul class="navbar__main-menu">
              <li><a href="#">About</a></li> 
              <li><a href="#">Services</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
            
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
          <div class="headings-text headings-text--light">
            <h3 class="headings-text__small-above">Modern Studio</h3>
            <h1 class="headings-text__big headings-text__big--size-big">We’re Here To Build Your Dream Project</h1>
            <p class="headings-text__paragraph">Agency provides a full service range including technical skills, design, business understanding.</p>
            <div class="buttons">
              <a href="" class="button button--color button--width-medium">How we work</a>
              <a href="" class="button button--normal-link button--width-wide">Contact us</a>
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

  <main>
<section class="logos-list background-beige">
  <div class="container">
    <div class="row">
      <div class="col col--padding-xs-x">
        <ul class="logos-list__list">
          <li><img src="./images/logo-digitalside.png" alt="logo Digitalside"></li>
          <li><img src="./images/logo-vortex.png" alt="logo Vortex"></li>
          <li><img src="./images/logo-travel-explorer.png" alt="logo Travel Explorer"></li>
          <li><img src="./images/logo-fusion.png" alt="logo Fusion"></li>
          <li><img src="./images/logo-mediafury.png" alt="logo Mediafury"></li>
        </ul>
      </div>
    </div>
  </div>
</section>
  </main>
  <script src="./dist/app.js"></script>
</body>

</html>