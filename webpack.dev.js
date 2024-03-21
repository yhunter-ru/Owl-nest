const path = require('path');
const HtmlBundlerPlugin = require('html-bundler-webpack-plugin');
const { compile } = require('handlebars');
const myVar = 'ok ok var-r-r';

module.exports = {
  mode: 'development',
  output: {
    path: path.resolve(__dirname, 'dist'),
    clean: false,
  },

  resolve: {
    alias: {
      '@scripts': path.join(__dirname, 'src/js'),
      '@styles': path.join(__dirname, 'src/scss'),
      '@images': path.join(__dirname, 'src/images'),
    },
  },

  plugins: [
    new HtmlBundlerPlugin({
      // path to templates
      hotUpdate: true,
      entry: 'src/views/',
      data: {
        'html': true,
        'theme': false,
      },
      js: {
        // output filename for JS
        filename: 'js/[name].[contenthash:8].js',
      },
      css: {
        // output filename for CSS
        filename: 'css/[name].[contenthash:8].css',
      },

      preprocessor: 'eta',
      preprocessorOptions: {
        async: false, // defaults 'false', wenn is 'true' then must be used `await includeAsync()`
        useWith: true, // defaults 'true', use variables in template without `it.` scope
        //views: 'src/views', // relative path to directory that contains templates
        //views: path.join(__dirname, 'src/views'), // absolute path to directory that contains templates

      },
      hotUpdate: true,

    }),
  ],

  module: {
    rules: [
      {
        test: /\.(scss)$/,
        use: ['css-loader', 'sass-loader'],
      },
      {
        test: /\.(ico|png|jp?g|svg|webp)/,
        type: 'asset',
        generator: {
          // save images to file
          filename: 'img/[name].[hash:8][ext]',
        },
        parser: {
          dataUrlCondition: {
            // inline images < 2 KB
            maxSize: 2 * 1024,
          },
        },
      },
      {
        test: /\.(woff2|woff)$/,
        type: 'asset/resource',
        generator: {
          filename: 'fonts/[name][ext]',
        },
      },
    ],
  },

  // enable HMR with live reload
  devServer: {
    hot: true,
    static: path.resolve(__dirname, 'dist'),
    watchFiles: {
      paths: ['src/**/*.*'],
      options: {
        usePolling: true,
      },
    },
  },
};