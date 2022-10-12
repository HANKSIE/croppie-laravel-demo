const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [
        //
    ]
);

mix.js(
    "resources/js/circle-image-cropper.js",
    "public/js/circle-image-cropper.js"
).version();

mix.css("resources/css/micromodal.css", "public/css/micromodal.css").version();
mix.css("resources/css/croppie.css", "public/css/croppie.css").version();
