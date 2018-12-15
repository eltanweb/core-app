<template lang="pug">
b-container(fluid='')
  b-container
    b-row
      b-col(cols="8")
        articleDay
      b-col.banners(cols="4")
        .banner 
            img(src='https://tpc.googlesyndication.com/simgad/11875537060489082839')
  div.block-category
    b-container
      category
      
</template>

<script>
import articleDay from '@/components/widgets/articleDay/articleDay'
import category from '@/components/category/category'

export default {
  name: 'home',
  components: {
    articleDay,
    category
  },
  data () {
    return {
      articles: {
          title: 'Сладкий медок',
          header: 'Рыболов 1',
          body: {
              preload: 'Про рыболовов',
              article: {
                  text: 'фылврфлыорв',
                  gallery: 'ddd',
              }
          }
      }
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.container-fluid {
  padding: 0px;
  margin: 0px;
}
.banners{
  padding: 10px;
}
.banners > .banner {
  border: 1px solid #fff;
}
.category-name {
  font-size: 22px;
  color: #000;
}
.category-name:hover {
  font-size: 22px;
  color: red;
  text-decoration: none;
}
.block-category {
  background-color: rgb(243, 243, 243);
  margin: 0px;
  padding: 0px;
}
</style>
