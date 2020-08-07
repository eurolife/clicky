const glob = require('glob-all');
const tailwindcss = require('tailwindcss');
const mix = require('laravel-mix');
const path = require('path')
require('laravel-mix-imagemin');

mix
    .setPublicPath('./website/')
    .options({
        processCssUrls: false,
    })
    .js('./src/js/app.js', './website/js')
    .imagemin(
        'images/**.*',
        {
            context: 'src',
        },

        {
            pngquant: {
                quality: '55-60'
            },
            jpegtran: null,
            plugins: [
                require('imagemin-mozjpeg')({
                    quality: 50,
                    progressive: true,
                }),
            ],
        }
        
    );

const cssWhitelist = [
    /owl/,
    /cms-content/,
    /aos/,
    /glide_/,
    /modal-video/,
    /hc-/,
];

const purgecss = require('@fullhuman/postcss-purgecss')({
    defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || [],
    whitelistPatterns: cssWhitelist,
    whitelistPatternsChildren: cssWhitelist,
    content: glob.sync([
        path.join(__dirname, 'website/**/*.{php,js}'),
    ]),
});

mix.sass('./src/sass/app.scss', './website/css', {}, [
    tailwindcss(__dirname + '/tailwind.config.js'),
    ...mix.inProduction() ? [purgecss] : []
])
.options({
    autoprefixer: {
        
        options: {
            grid: 'autoplace',
            browsers: [
                "last 10 versions",
                "ie 10",
                "ie 11",
            ]
        }
    }
});;
mix.browserSync({
    ghostMode: false,
    proxy: 'localhost/jobs/clicky/clicky/website/',
    files: ['website/**/*.php', 'website/**/*.css', 'website/**/*.js']
});
