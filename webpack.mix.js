// Deployment path
const public = "../../../public";
const publicResources = "resources/vendor/:lc:vendor/:lc:package";
const nodePath = __dirname + "/node_modules";
const assetPath = __dirname + "/resources/assets";

const { mix } = require("laravel-mix");
require("laravel-mix-merge-manifest");
require('webpack');

mix.setPublicPath(publicResources).mergeManifest();

// Compile Javascript
mix.js(
        [assetPath + "/js/app.js",],
    "js/app.js"
).webpackConfig({
    resolve: {
        alias: {
            '@node': path.resolve(nodePath)
        }
    },
    externals: {
        vue: 'Vue',
    },
});

// Compile published styles and copy fonts
mix.sass(publicResources + '/scss/app.scss', 'css/app.css');

// Optionally copy fonts to public directory
//mix.copy(publicResources + '/fonts', public + '/fonts');
