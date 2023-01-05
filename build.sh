#!/bin/sh
npx sass ./src/sass/style.scss ./public/wp-content/themes/ben/style.css
cp ./src/index.php ./public/wp-content/themes/ben
cp ./src/header.php ./public/wp-content/themes/ben
cp ./src/footer.php ./public/wp-content/themes/ben
cp ./src/workshops.php ./public/wp-content/themes/ben
cp ./src/about.php ./public/wp-content/themes/ben
cp ./src/favicons/*.* ./public/wp-content/themes/ben
cp -R ./src/images ./public/wp-content/themes/ben
cp -R ./src/fonts ./public/wp-content/themes/ben
npx esbuild ./src/js/main.js --bundle --outfile=./public/wp-content/themes/ben/main.js  --minify

