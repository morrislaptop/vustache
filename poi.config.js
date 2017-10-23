const mustacheLoader = require.resolve('./vue-mustache-loader')

module.exports = {
  webpack (config) {
    
    config.module.rules[14].use[0].options.loaders.mustache = [mustacheLoader]
    console.log(config.module.rules[14].use[0].options.loaders)

    return config
  },

  // extendWebpack(config) {
  //   config.module.rule('vue').use('vue-loader').options({
  //     loaders: {
  //       'mustache': mustacheLoader
  //     }
  //   })
  // }
}