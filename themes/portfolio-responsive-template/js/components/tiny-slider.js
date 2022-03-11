import { tns } from "tiny-slider"

var slider = tns({
    container: '.slider-arrows-dots__slides',
    items: 4,
    slideBy: 'page',
    autoplay: true,
    gutter: 30,
    fixedWidth: 270,
    mouseDrag: true,
    controlsContainer: '.slider-arrows-dots__controls',
    autoplayButtonOutput: false,
    nav: true,
    navContainer: '.slider-arrows-dots__dots'
});