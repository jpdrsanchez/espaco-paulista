import gulp from 'gulp';
import postcss from 'gulp-postcss';
import gulpSass from 'gulp-sass';

import sass from 'sass';

import autoprefixer from 'autoprefixer';
import cssnano from 'cssnano';
import pxtorem from 'postcss-pxtorem';

import webpack from 'webpack-stream';

import browserSync from 'browser-sync';

const scss = gulpSass(sass);

const paths = {
  scss: './assets/scss/**/*.scss',
  js: './assets/js/**/*.js',
};

export const css = () =>
  gulp
    .src(paths.scss, { sourcemaps: true })
    .pipe(scss())
    .pipe(
      postcss([
        autoprefixer(),
        pxtorem({ replace: true, propList: ['*'] }),
        cssnano(),
      ]),
    )
    .pipe(gulp.dest('.', { sourcemaps: '.' }));

export const js = () =>
  gulp
    .src(paths.js, { sourcemaps: true })
    .pipe(webpack({ mode: 'production' }))
    .pipe(gulp.dest('.', { sourcemaps: '.' }));

export const watch = () =>
  gulp.watch([paths.scss, paths.js], gulp.parallel(css, js));

export default gulp.parallel(css, js, watch);
