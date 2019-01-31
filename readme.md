# boilerplate-laravel-react

[![Build Status](https://travis-ci.org/basribasren/boilerplate-laravel-react.svg?branch=master)](https://travis-ci.org/basribasren/boilerplate-laravel-react) [![CircleCI](https://circleci.com/gh/basribasren/boilerplate-laravel-react.svg?style=svg)](https://circleci.com/gh/basribasren/boilerplate-laravel-react) [![dependencies Status](https://david-dm.org/basribasren/boilerplate-laravel-react/status.svg)](https://david-dm.org/basribasren/boilerplate-laravel-react) ![GitHub All Releases](https://img.shields.io/github/downloads/basribasren/boilerplate-laravel-react/total.svg) [![GitHub license](https://img.shields.io/github/license/basribasren/boilerplate-laravel-react.svg)](https://github.com/basribasren/boilerplate-laravel-react/blob/master/LICENSE) [![GitHub last commit](https://img.shields.io/github/last-commit/basribasren/boilerplate-laravel-react.svg)](https://github.com/basribasren/boilerplate-laravel-react/commits/master)

boilerplate for create web using laravel v5.7 with react.
Tools : Laravel, React, Webpack, composer, artisan, black dashboard react admin.

## Ecosystem

<!-- prettier-ignore -->
| Project | Status | Description |
|---------|--------|-------------|
| [laravel]          | [![laravel-status]][laravel-package] | A PHP framework for web artisans. |

[laravel]: https://github.com/laravel/laravel
[laravel-status]: https://travis-ci.org/laravel/framework.svg?branch=master
[laravel-package]: https://packagist.org/packages/laravel/framework

## Folder Structure

After creation, your project should look like this:

```
my-app/
├── node_modules/
├── vendor/
├── app/
│   └── .../
│   └── .../
│   └── Http/
│   └── .../
│   └── User.php
├── .../
├── .../
├── .../
├── public/
│   └── assets/
├── resources/
│   └── react/
│   	└── assets/
│   	└── component/
│   	└── layouts/
│   	└── variables/
│   	└── views/
│   	└── index/
│   	└── routes/
│   └── .../
│   └── views/
│   	└── layouts/
│   	└── view/
│   	└── bootstrap.js
│   	└── merge-react.js
├── routes/
├── .../
├── .../
├── composer.json
├── package.json
├── Procfile.js
└── webpack.mix.js

```

## Available Scripts

In the project directory, you can run:

### `npm install`

Runs this command to install npm dependencies<br>
result will in the `node_modules` folder

### `composer install`

Runs this command to install composer dependencies<br>
result will in the `vendor` folder

### `php artisan list`

To view a list of all available Artisan commands, you may use the list command<br>
to view list artisan command articel [Artisan Command](https://quickadminpanel.com/blog/list-of-16-artisan-make-commands-with-parameters/)

### `npm run dev`

Run webpack to create assets in public folder in development mode.<br>

### `npm run watch`

Run webpack to create assets in public folder in watch mode.<br>

### `npm run hot`

Builds the app for production to the `dist` folder.<br>

### `npm run production`

Run webpack to create assets in public folder in production mode<br>

## Maintainers

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore -->
<img src="https://avatars0.githubusercontent.com/u/25193994?v=4" width="100px;"/><br /><sub><b>Basri Basren</b></sub>

<!-- ALL-CONTRIBUTORS-LIST:END -->

## Something Missing?

If you have ideas for more “How To” recipes that should be on this page, [let us know](https://github.com/basribasren/boilerplate-react-redux/issues)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
