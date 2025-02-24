const mix = require("laravel-mix");
const webpack = require("webpack");
require("dotenv").config();
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

mix.js("resources/js/app.js", "public/js")
    .react()
    .webpackConfig({
        plugins: [
            new webpack.DefinePlugin({
                "process.env": {
                    TOKEN: JSON.stringify(process.env.TOKEN),
                },
            }),
        ],
    })

    .postCss("resources/css/app.css", "public/css")
    .js("resources/js/Pages/Invoice/app-invoice.js", "public/js")
    .react()
    .postCss("resources/js/Pages/Invoice/invoice.css", "public/css");
