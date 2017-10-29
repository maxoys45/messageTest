module.exports = {
  module: {
    loaders: [
      {
        test   : /\.css$/,
        loaders: ['style-loader', 'css-loader', 'resolve-url-loader']
      }, {
        test   : /\.scss$/,
        loaders: ['style-loader', 'css-loader', 'resolve-url-loader', 'sass-loader?sourceMap']
      }
    ]
  }
};