
# EPFL STI WordPress Theme Framework

Based on [UnderStrap](https://understrap.com) — Bootstrap 4, jQuery, child-theme-friendly, Jetpack, WooCommerce, i18n.


## License

Like UnderStrap, the EPFL-STI theme is released under the terms of the GPL version 2 or (at your option) any later version.

http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html

## Installation

- Download folder from GitHub
- Upload it into your WordPress installation subfolder here: `wp-content/themes/epfl-sti`
- Run a terminal, cd to the `wp-content/themes/epfl-sti` and type `npm install` to build all the things
- Login to your WordPress backend
- Go to Appearance → Themes
- Activate the EPFL-STI theme

### Plugins

#### polylang
1. Install Polylang
1. Change the language full name to get the FR / EN (<https://polylang.pro/doc/configure-the-languages/#full-name>)


## Development

### Installing Dependencies
- Make sure you have installed Node.js and npm on your computer globally
- Then open your terminal and browse to the location of your UnderStrap copy
- Run: `$ npm install`

### Running

1. Get WordPress running and note down the URL for step 5
2. Add `devsupport/browser-sync.crt` to your browser's or operating system's trusted certificate store (*optional* but [recommended in order to debug with Chrome]())
3. Make sure you have installed Node.js on your computer globally
4. Then open your terminal and browse to the location of your UnderStrap copy
5. Run e.g.: `$ npm start -- --url=https://localhost/sti --browser=chrome`<br/>💡 For Mac OS X, use `--browser="Google Chrome"` instead.

### Directory layout

- Files read by WordPress directly:  `index.php`, `style.css` (the browser never sees that one)
- Serving directories: `css/`, `js/` — may contain source files, as well as files generated by Gulp
- Source files for the client (non-serving-state; must be processed with Gulp): `src/`, `sass/`
- PHP templates for the overall site layout: `header.php`, `footer.php`
- PHP templates for specific pages: `tribe-events/single-event.php`, `loop-templates/*.php`

### SCSS basics

The `/css/theme.css` and its minified little brother `/css/theme.min.css` file(s) provides most of the styles. It is composed of five different SCSS sets and one variable file at `/sass/theme.scss`. Read the comments there for a quick orientation session. Add your designs to `/sass/theme/_theme.scss` and your variables to `/sass/theme/_theme_variables.scss`.

# Licenses & Credits

- Understrap: http://understrap.com
- Font Awesome: http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
- Bootstrap: http://getbootstrap.com | https://github.com/twbs/bootstrap/blob/master/LICENSE (Code licensed under MIT documentation under CC BY 3.0.)
- Owl Carousel 2: http://www.owlcarousel.owlgraphic.com/ | https://github.com/smashingboxes/OwlCarousel2/blob/develop/LICENSE (Code licensed under MIT)
and of course
- jQuery: https://jquery.org | (Code licensed under MIT)
- WP Bootstrap Navwalker by Edward McIntyre: https://github.com/twittem/wp-bootstrap-navwalker | GNU GPL
