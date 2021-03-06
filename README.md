# :uc:vendor :uc:package

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Prerequisites
``` bash
composer require jeroen-g/laravel-packager
```

## Installation

##### Via Artisan

``` bash
php artisan packager:new PaperStreet/MyTest --skeleton="https://github.com/denncath/laravel-package-stub-default/archive/main.zip"
```

##### Integrate :uc:package in your project:

Publish assets (scss):
``` bash
php artisan vendor:publish --provider=":uc:vendor\:uc:package\Providers\:uc:packageServiceProvider" --force

Note: path is case-sensitive!
```

Compile assets in package root (js):
``` bash
npm install
npm run watch
```

Include javascript to `resources/js/app.js`
``` javascript
require('./../vendor/:lc:vendor/:lc:package/js/app');
```

Import styles in `resources/sass/app.scss`
``` sass
@import "../vendor/:lc:vendor/:lc:package/css/app";

// Optionally you may import variables to 
// use with your other styles
@import "../vendor/:lc:vendor/:lc:package/scss/variables";
```

## Removal
``` bash
php artisan packager:remove :lc:vendor/:lc:package
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.
Create your own package:
``` bash
php artisan packager:new MyVendor/MyPackage
```

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [:author_name][link-author]
- [All Contributors][link-contributors]

## License

:license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/:lc:vendor/:lc:package.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/:lc:vendor/:lc:package.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/:lc:vendor/:lc:package/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/:lc:vendor/:lc:package
[link-downloads]: https://packagist.org/packages/:lc:vendor/:lc:package
[link-travis]: https://travis-ci.org/:lc:vendor/:lc:package
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/:lc:vendor
[link-contributors]: ../../contributors
