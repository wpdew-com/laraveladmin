let preprocessor = 'less', // Preprocessor (sass, less, styl); 'sass' also work with the Scss syntax in blocks/ folder.
		fileswatch   = 'php,html,htm,txt,json,md,woff2,less' // List of files extensions for watching & hard reload

import pkg from 'gulp'
const { gulp, src, dest, parallel, series, watch } = pkg

import browserSync   from 'browser-sync'
import bssi          from 'browsersync-ssi'
import ssi           from 'ssi'
import webpackStream from 'webpack-stream'
import webpack       from 'webpack'
import TerserPlugin  from 'terser-webpack-plugin'
import gulpSass      from 'gulp-sass'
import dartSass      from 'sass'
import sassglob      from 'gulp-sass-glob'
const  sass          = gulpSass(dartSass)
import less          from 'gulp-less'
import lessglob      from 'gulp-less-glob'
import styl          from 'gulp-stylus'
import stylglob      from 'gulp-noop'
import postCss       from 'gulp-postcss'
import cssnano       from 'cssnano'
import autoprefixer  from 'autoprefixer'
import imagemin      from 'gulp-imagemin'
import changed       from 'gulp-changed'
import concat        from 'gulp-concat'
import rsync         from 'gulp-rsync'
import del           from 'del'
import ftp 			 from 'vinyl-ftp'
import gutil         from 'gulp-util'
import webp          from 'gulp-webp'

function browsersync() {
	browserSync.init({
		server: {
			baseDir: 'app/',
			middleware: bssi({ baseDir: 'app/', ext: '.html' })
			
		},
		ghostMode: { clicks: false },
		
		//open : 'external' , 
		//host : 'pwaplugin.loc' , 
		//proxy: "pwaplugin.loc",
		open: true,
		notify: true, //false or true
		//online: true,
		// tunnel: 'yousutename', // Attempt to use the URL https://yousutename.loca.lt
	})
}

function scripts() {
	return src(['app/js/*.js', '!app/js/*.min.js'])
		.pipe(webpackStream({
			mode: 'production',
			performance: { hints: false },
			plugins: [
				new webpack.ProvidePlugin({ $: 'jquery', jQuery: 'jquery', 'window.jQuery': 'jquery' }), // jQuery (npm i jquery)
			],
			module: {
				rules: [
					{
						test: /\.m?js$/,
						exclude: /(node_modules)/,
						use: {
							loader: 'babel-loader',
							options: {
								presets: ['@babel/preset-env'],
								plugins: ['babel-plugin-root-import']
							}
						}
					}
				]
			},
			optimization: {
				minimize: true,
				minimizer: [
					new TerserPlugin({
						terserOptions: { format: { comments: false } },
						extractComments: false
					})
				]
			},
		}, webpack)).on('error', (err) => {
			this.emit('end')
		})
		.pipe(concat('app.min.js'))
		.pipe(dest('app/js'))
		.pipe(browserSync.stream())
}

function styles() {
	return src([`app/styles/${preprocessor}/*.*`, `!app/styles/${preprocessor}/_*.*`])
		.pipe(eval(`${preprocessor}glob`)())
		.pipe(eval(preprocessor)({ 'include css': true }))
		.pipe(postCss([
			autoprefixer({ grid: 'autoplace' }),
			cssnano({ preset: ['default', { discardComments: { removeAll: true } }] })
		]))
		.pipe(concat('app.min.css'))
		.pipe(dest('app/css'))
		.pipe(browserSync.stream())
}

function images() {
	return src(['app/images/src/**/*'])
		.pipe(changed('app/images/dist'))
		.pipe(imagemin())
        .pipe(webp())
		.pipe(dest('app/images/dist'))
		.pipe(browserSync.stream())
}

function buildcopy() {
	return src([
		'{app/js,app/css}/*.min.*',
		'app/images/**/*.*',
		'!app/images/src/**/*',
		'app/fonts/**/*',
        'app/libs/**/*'
	], { base: 'app/' })
	.pipe(dest('core/public/access'))
}

async function buildhtml() {
	let includes = new ssi('app/', 'core/public/access/', '/**/*.html')
	includes.compile()
	del('core/public/access/parts', { force: true })
}

async function cleandist() {
	del('core/public/access/**/*', { force: true })
}




function startwatch() {
	watch(`app/styles/${preprocessor}/**/*`, { usePolling: true }, styles)
	watch(['app/js/**/*.js', '!app/js/**/*.min.js'], { usePolling: true }, scripts)
	watch('app/images/src/**/*', { usePolling: true }, images)
	watch(`../**/*.{${fileswatch}}`, { usePolling: true }).on('change', browserSync.reload)
}

function startwatchg(){
	watch(`app/styles/${preprocessor}/**/*`, { usePolling: true }, parallel(styles, browserSync.reload))
	watch(`../**/*.{${fileswatch}}`, { usePolling: true }).on('change', browserSync.reload)
}


export { scripts, styles, images }
export let assets = series(scripts, styles, images)
export let build = series(cleandist, images, scripts, styles, buildcopy, buildhtml)

export default series(scripts, styles, images, parallel(browsersync, startwatch))
