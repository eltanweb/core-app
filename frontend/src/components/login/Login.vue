<template lang="pug">
b-container
    section 
     |{{ msg }}
</template>

<script>
export default {
  name: 'login',
  data () {
    return {
      msg: 'logn'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
