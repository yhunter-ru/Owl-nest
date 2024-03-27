const path = require('path');
const HtmlBundlerPlugin = require('html-bundler-webpack-plugin');
const CopyPlugin = require("copy-webpack-plugin");

//Production 

module.exports = {
  mode: 'production',

  watchOptions: {
    followSymlinks: true,
  },

  cache: true,

  output: {
    path: path.resolve(__dirname, 'dist/Owl'),
    clean: true,
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
      test: /\.(html|php|phtml)$/i, // define template extensions to be processed
      entry: 'src/views/',
      data: {
        'html': false,
        'theme': true,
        'dir': '/wp-content/themes/Owl',
        'hash': Math.random(),
      },
      minify: false,
      filename: '[name].php',
      js: {
        // output filename for JS
        filename: 'js/[name].js',
      },
      css: {
        // output filename for CSS
        filename: '[name].css?=[contenthash:8]',
      },
      preprocessor: 'eta',
      preprocessorOptions: {
        async: true, // defaults 'false', wenn is 'true' then must be used `await includeAsync()`
        useWith: true, // defaults 'true', use variables in template without `it.` scope
        //views: path.join(__dirname, 'src/views'), // absolute path to directory that contains templates

      },
      beforePreprocessor: (content, { resourcePath, data }) => {
        const pattern = /@hash/gs;
        return content.replaceAll(pattern, 'ok ok hash'); // modify template content
      },

    })
  ],

  module: {
    rules: [
      {
        test: /\.(scss)$/,
        use: ['css-loader', 'sass-loader'],
      },
      {
        test: /\.(ico|png|jp?g|svg)/,
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
};

