const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
mix.scripts([

	'resources/assets/global/plugins/jquery.min.js',
	'node_modules/bootstrap/dist/js/bootstrap.min.js',
	'resources/assets/global/plugins/js.cookie.min.js',
	'resources/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
	'resources/assets/global/scripts/app.min.js',
	'resources/assets/layouts/layout/scripts/layout.min.js',
	'resources/assets/layouts/global/scripts/quick-sidebar.min.js',
	'resources/assets/layouts/layout/scripts/quick-nav.min.js',
	'resources/assets/js/toastr.js',
	], 'public/js/syscode.js'
	);
mix.styles([
		'resources/assets/global/css/components-md.min.css',
		'resources/assets/layouts/layout/css/layout.min.css',
   		'resources/assets/layouts/layout/css/light.min.css',
   		'resources/assets/css/toastr.css',
   		'resources/assets/css/styles.css',
   	], 'public/css/syscode.css');
