const path = require('path');
const webpack = require('webpack');

module.exports = {
    entry: path.join(__dirname, '/js/index.js'),
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'assets'),
    },
    module: {
        rules: [{
            test: /\.(js|jsx)$/,
            exclude: /node_modules/,
            use: ['babel-loader']
        }]
    },
    resolve: {
        extensions: ['*', '.js', '.jsx']
    },
    plugins: [
        new webpack.HotModuleReplacementPlugin()
    ],
    mode: 'development',
    devServer: {
        hot: true
    }
};