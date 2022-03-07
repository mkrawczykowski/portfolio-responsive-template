# Wordpress website based on Adobe XD project (work in progress)

**Project file:** https://laaqiq.gumroad.com/l/bkhPD<br>
**Demo site:** https://portfolio-responsive-template.stronyireszta.pl/

## (Almost) pixel perfect
Here are some images you can use to check it yourself:
- header: [desktop](https://portfolio-responsive-template.stronyireszta.pl/prtscr/header-desktop.png) and [mobile](https://portfolio-responsive-template.stronyireszta.pl/prtscr/header-mobile.png)
- more examples coming soon
<br><br><br>


## My Gutenberg blocks (made with ACF Pro) in a Wordpress plugin
Every block is stored in a different subfolder in the plugin's folder. That's why I had to figure out a way to bundle JS files in those subfolders (Webpack's entry point with multiple paths) and output bundled files in same subfolders (output paths based on filenames) - one for each block.
Googling Stackoverflow was very helpful here :)
<br><br>
I don't think this is the best idea possible, but that's what I managed to figure out for now.
<br><br>**source:** [webpack.config.js](https://github.com/mkrawczykowski/portfolio-responsive-template/blob/master/plugins/portfolio-gutenberg-blocks/webpack.config.js#L9)
<br><br><br>


## Adding a new blocks - acf_register_block_type with foreach loop
Adding a block is simple as I created a foreach loop that loops through an array of arrays - each of which is a different block.
<br><br>**source:** [portfolio-gutenberg-blocks.php](https://github.com/mkrawczykowski/portfolio-responsive-template/blob/master/plugins/portfolio-gutenberg-blocks/portfolio-gutenberg-blocks.php#L17)
<br><br><br>

## Images ready for Retina screens (2x only) and different image on desktop and mobiles
The project's designer created header image in two versions. The versions have different ratios, so I had to include both of them in my project to make my coded website as much pixel perfect as I can.
<br><br>
I decided to use picture element to this. This way, I could also create 2x versions for each image to make it look better on Retina screens.
<br><br>**source:** [header.php](https://github.com/mkrawczykowski/portfolio-responsive-template/blob/master/themes/portfolio-responsive-template/header.php#L51)
<br><br><br>

## ACF fields stored in JSON files
What else can I say here? ;)
<br><br>**source:** [folder /acf-json](https://github.com/mkrawczykowski/portfolio-responsive-template/tree/master/themes/portfolio-responsive-template/acf-json)
<br><br><br>

## SCSS with BEM
Standard BEM, only the block's molecules are being moved to plugin's folder. 
<br><br>**source:** [/scss folder](https://github.com/mkrawczykowski/portfolio-responsive-template/tree/master/themes/portfolio-responsive-template/scss)
<br><br><br>

## Block with DIY lightbox
- with document.body.style.overflow = 'hidden'; added. :)
- support for multiple lightblock blocks used on one page
- YT player embedded in lightbox using Youtube API
- YT player's ratio is being calculated based on offsetWidth of lightbox's content
<br><br>**source:** [video-lightbox.js](https://github.com/mkrawczykowski/portfolio-responsive-template/blob/master/themes/portfolio-responsive-template/js/components/video-lightbox.js)
<br><br><br>


## Bootstrap 4 grid (bootstrap-grid)
I only used grid for now as this is my favourite feature of Bootstrap.
<br><br>
Coming soon: some Bootstrap components.
<br><br><br>

## ...and more:
- custom image sizes registered in Wordpress for 1x and 2x images
- mobile first coding
