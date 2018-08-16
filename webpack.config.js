// var webpack = require('webpack')

module.exports = function (env) {
  return {
    entry: './src/js/main.js',
    output: {
      path: __dirname + '/dist/js',
      filename: 'bundle.js'
    },
    module: {
      loaders: [
        {
          test: /\.js$/,
          loader: 'babel-loader',
          exclude: '/node_modules/',
          query: {
            presets: ['es2015']
          }
        }
      ]
    }
  };
};
