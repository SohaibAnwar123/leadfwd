const webpack = require('webpack');
const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const devMode = process.env.NODE_ENV !== 'production';
const CopyPlugin = require('copy-webpack-plugin');

module.exports = {
    watch: true,
    entry: './src/app.js',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist')
    },
    devtool: 'source-map',
    plugins: [
        new MiniCssExtractPlugin({
            filename: "style.css"
        }),
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery'
        }),
        new CopyPlugin([
            { from: 'src/img', to: '../img' },
            { from: 'src/fonts', to: '../fonts' },
        ]),
    ],
    mode: devMode ? 'development' : 'production',
    module: {
        rules: [
            {
                test: /.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
                use: [{
                    loader: 'file-loader',
                    options: {
                        name: '[name].[ext]',
                        outputPath: 'fonts',
                        publicPath: '../fonts'
                    }
                }]
            },
            {
                test: /\.s?[ac]ss$/,
                use: [
                    {loader: 'style-loader'},
                    MiniCssExtractPlugin.loader,
                    {loader: 'css-loader', options: {url: false, sourceMap: true}},
                    {
                        loader: 'postcss-loader',
                        options: {
                            url: false, sourceMap: true,
                            plugins: function () {
                                return [
                                    require('autoprefixer'),
                                    require('cssnano')({ preset: 'default' }),
                                ];
                            },
                            minimize: true,
                        }
                    },
                    {loader: 'sass-loader', options: {sourceMap: true}}
                ]
            },
            {
                test: /\.woff2?(\?v=\d+\.\d+\.\d+)?$/,
                use: {
                    loader: "url-loader",
                    options: {
                        limit: 50000,
                        mimetype: "application/font-woff",
                        name: "[name].[ext]"
                    },
                }
            },
            {
                test: /\.(jpe?g|png|gif|svg)$/i,
                use: {
                    loader: "file-loader",
                    options: {
                        name: "[name].[ext]",
                        publicPath: "img",
                        outputPath: "../img"
                    }
                }
            },
        ]
    }
};