import mustache from 'mustache'

export default {
  render (createElement) {
    let rendered = mustache.render(this.$options.mustache, this)

    return createElement('div', {
      domProps: {
        innerHTML: rendered
      }
    })
  }
}