<script>
import navbar from '@/components/menu/navbar'
import footerBlock from '@/components/footer/footer'

export default {
  data () {
    return {
      menu: [
            { title: 'Поплавочная', url: '/' },
            { title: 'Донная', url: '/category' },
            { title: 'Спининг', url: '/page' },
            { title: 'Зимняя рыбалка', url: '/login' },
            { title: 'Рыбы и водоемы', url: '/login' },
            { title: 'Насадки и прикормки', url: '/login' },
          ]
    }
  },
  components: {
    navbar,
    footerBlock
  }
}
</script>

<template lang="pug">
#app
  navbar
  router-view
  footer
    footerBlock
</template>

<style>
#app {
  font-family: Georgia,Bitstream Charter,"Droid Serif",serif;
}
</style>
