# Hamlet 🎭

## A WordPress theme converted from an HTML ➕ CSS template 🎀 


| WordPress version | Web server version | PHP version | Database version |
| ---               | ---                | ---         | ---              |
| 6.2.2             | nginx 1.16.0       | 8.1.9       | MySQL 8.0.16     |


The mandatory files for a Wordpress theme are:
- index.php *(in case WP cannot find a certain template, WP will use this file as fallback)*
- style.css 

Regarding the **WP loop** put in `front-page.php`: 

1. The `have_posts()` function checks whether there are any posts
2. If there are posts, a `while` loop continues to execute as long as the condition in the parenthesis is logically true
As long as `have_posts()` continues to be true, the loop will continue

*Because you do not want to duplicate your header over and over, the loop should always be placed after the call to `get_header()`*

### Tasks ✍️ 
- [x] create WP Website via Local Development Tool :computer_mouse: [Download Local here](https://localwp.com/)


- [x] create 23 items between files and folders 📁 within `wp-content/themes/hamlet`:
* `classes` folder
* `inc` folder
* `theme-template` folder **(cointains HTML & CSS template)**
* `template-parts` folder
* `404.php`
* `archive.php`
* `comments.php`
* `footer.php` 
* `functions.php`
* `header.php`
* `index.php`
* `page.php`
* `README.md`
* `search.php`
* `single.php` ➡️ **(responsible for single posts)**
* `style.css`
* `screenshot.png`
* `front-page.php`
*  `assets` folder with 4 subfolders:
     * `css`, `fonts`, `images`, `js`;
- [x] create repository for this project and push it via GitHub Desktop :computer_mouse:[Download here](https://desktop.github.com/)


- [x] from this file path (belonging to the HTML template) `theme-template/css/style.css`
, copy this stylesheet and paste it all inside `hamlet/style.css` and add theme information for example author's name that will be displayed on WP back end 
- [x] add image to **Hamlet theme** and name it screenshot.png 🖼️ and it will show up on WP back end by clicking on *Appearance > Themes* then activate **Hamlet theme** 🚀
- [x] copy file from `theme-template/index.html` and paste its code into `hamlet/front-page.php`
- [x] register and enqueue styles and scripts in `functions.php`
- [x] replace styles and scripts on `front-page.php` with `wp_head();` and `wp_footer();` 
- [x] copy file from `theme-template/js/main.js` and paste this JavaScript file into `assets/js`
- [x] add content from `front-page.php` into `header.php` and `footer.php`  
- [x] the cut content in `front-page.php` is replaced by the functions `get_header();` and `get_footer();`so WP loads the 2 parts of the website dynamically 
- [x] add page title to load dynamically with function `hamlet_theme_support` in `functions.php` 
- [x] create WP loop in `front-page.php`and it will display the content of the only page created up to this point that is *"Home Sweet Home"* that I set to be the homepage
- [x] make the page title heading dynamic by replacing it with PHP `the_title();` in `header.php` so in this case it will output *"Home Sweet Home"*
- [x] create WP menus with function `hamlet_menus` in `functions.php` <br>
🖱️ The path *Appearance > Menus* is now created on WP back end
- [x] make the primary WP menu dynamic and copy the styles of `<ul>, <li>, <i>, <a>` from the HTML template (to add the styling for the anchor tag, I replace `.nav-link` with `a` in `style.css`)
- [x] add and customize site logo in `functions.php`
- [x] output site logo in `header.php`
- [x] load site name dynamically in `header.php`
- [x] in `functions.php` add option to have **featured image** on posts with `add_theme_support('post-thumbnails')`
- [x] copy full content of `front-page.php` into `single.php`<br>
This will display each post with its content instead of blank pages
- [x] add several posts with different thumbnails
- [x] create new file `content-article.php` in `template-parts` 📁 and link it through code to 'single.php'
- [x] insert post meta data (copy this specific section from 'theme-template/post.html' to 'template-parts/content-article.php') and replace hardcoded parts with PHP 🐘
- [x] set up configuration of the comment section from 'comment.php' 






📓 Documentation [^1]
[^1]: https://developer.wordpress.org/

