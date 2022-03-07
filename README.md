# Wordpress website based on Adobe XD project (work in progress)

**Project file:** https://laaqiq.gumroad.com/l/bkhPD
**Demo site:** https://portfolio-responsive-template.stronyireszta.pl/

## (Almost) pixel perfect
Here are some images you can use to check it yourself:
- header: [desktop](https://portfolio-responsive-template.stronyireszta.pl/prtscr/header-desktop.png) and [mobile](https://portfolio-responsive-template.stronyireszta.pl/prtscr/header-mobile.png)
- more examples coming soon
<br><br>


## My Gutenberg blocks (made with ACF Pro) in a Wordpress plugin
Every block is stored in a different subfolder in the plugin's folder. That's why I had to figure out a way to bundle JS files in those subfolders (Webpack's entry point with multiple paths) and output bundled files in same subfolders (output paths based on filenames) - one for each block.
Googling Stackoverflow was very helpful here :)
<br><br>
I don't think this is the best idea possible, but that's what I managed to figure out for now.
**source:** [webpack.config.js](https://github.com/mkrawczykowski/portfolio-responsive-template/blob/master/plugins/portfolio-gutenberg-blocks/webpack.config.js#L9)
<br><br>


## Adding a new blocks - acf_register_block_type with foreach loop
Adding a block is simple as I created a foreach loop that loops through an array of arrays - each of which is a different block.
**source:** [portfolio-gutenberg-blocks.php](https://github.com/mkrawczykowski/portfolio-responsive-template/blob/master/plugins/portfolio-gutenberg-blocks/portfolio-gutenberg-blocks.php#L17)
<br><br>

## Images ready for Retina screens (2x only) and different image on desktop and mobiles
The project's designer created header image in two versions. The versions have different ratios, so I had to include both of them in my projekt to make my coded website as much pixel perfect as I can.
<br><br>
I decided to use <picture> element to this. This way, I could also create 2x versions for each image to make it look better on Retina screens.
  **source:** 
  <br><br>
