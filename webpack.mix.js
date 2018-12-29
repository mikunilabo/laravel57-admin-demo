const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Custom settings
mix.webpackConfig({
    resolve: {
        alias: {
            pace: 'pace-progress'
        }
    }
});

// JS
mix.js('resources/js/app.js', 'public/js')
    .extract([
        'jquery',
        'pace-progress',
        'bootstrap',
        'perfect-scrollbar',
        '@coreui/coreui',
        'chart.js',
        '@coreui/coreui-plugin-chartjs-custom-tooltips',
        'vue',
        ]);

// CSS
mix.sass('resources/sass/app.scss', 'public/css');

// Source Maps
mix.sourceMaps();

// Versioning
if (mix.inProduction()) {
    mix.version();
}

// Hot reloading
if (process.env.MIX_APP_URL) {
    mix.browserSync({
        proxy: process.env.MIX_APP_URL,
        watchOptions: {
            usePolling: true,
            interval: 100
        },
        reloadOnRestart: true,
//        open: "external",
//        browser: "google chrome",
//        ui: false
    });
}

// Browser Notifications
//mix.disableNotifications();
