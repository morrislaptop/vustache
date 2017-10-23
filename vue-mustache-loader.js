module.exports = function (source, map) {
  this.callback(null, 'module.exports = function(Component) {Component.options.mustache = ' +
    JSON.stringify(source) +
    '}', map)
}