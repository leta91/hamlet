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
- [x] create 23 items between files and folders within `wp-content/themes/hamlet`:
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
* `single.php`
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



📓 Documentation [^1]
[^1]: https://developer.wordpress.org/

