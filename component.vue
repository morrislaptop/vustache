<script>
  import mustache from './vue-mustache-mixin'

  export default {
    mixins: [mustache],

    created () {
      console.log('Created!', this.$options.mustache)
    },

    data () {
      return {
        hello: 'world'
      }
    },
    
    methods: {
      sayHi () {
        console.log('HIYYAYAA')
      }
    }
  }
</script>

<mustache>
  <div>Hi there2: {{ hello }} <a href="#" @click="sayHi">Say Hi</a></div>
</mustache>

<template>
  <div>
    Hello {{ hello }} <a href="#" @click="sayHi">Say Hi</a>
  </div>
</template>