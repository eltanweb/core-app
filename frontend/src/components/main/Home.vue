<template lang="pug">
b-container
  b-row
    b-col(cols="8")
      articleDay
    b-col.banners(cols="4")
      .banner 
          img(src='https://tpc.googlesyndication.com/simgad/11875537060489082839')
  b-row        
    b-col(cols="4")
      b-link.category-name(to="category") в нахлыст
        img.img-thumbnail(src="https://fion.ru/images/photo/bedfaedc8418db84c638ba4dddf8dfc8.jpg")
        | Быстрые крэнки для агрессивных окуней
      b-link.category-name(to="category") в нахлыст
        b-media(left-align='', vertical-align='center')
            b-img(slot='aside', src='https://forum.akvabanka.ru/data/avatars/m/0/755.jpg?1449846455', blank-color='#ccc', width='80', alt='placeholder')
            h5.mt-0.mb-1 Нахлыст на водохранилищах
            |  В понимании людей, ни разу не ловивших на мушку
    b-col(cols="4")
      b-link.category-name(to="category") в нахлыст
        img.img-thumbnail(src="https://fion.ru/images/photo/bedfaedc8418db84c638ba4dddf8dfc8.jpg")
        | Быстрые крэнки для агрессивных окуней
      b-link.category-name(to="category") в нахлыст
         b-media(left-align='', vertical-align='center')
            b-img(slot='aside', src='https://forum.akvabanka.ru/data/avatars/m/0/755.jpg?1449846455', blank-color='#ccc', width='80', alt='placeholder')
            h5.mt-0.mb-1 Нахлыст на водохранилищах
            |  В понимании людей, ни разу не ловивших на мушку
    b-col(cols="4")
      b-link.category-name(to="category") в нахлыст
        img.img-thumbnail(src="https://fion.ru/images/photo/bedfaedc8418db84c638ba4dddf8dfc8.jpg")
        | Быстрые крэнки для агрессивных окуней
      b-link.category-name(to="category") в нахлыст
         b-media(left-align='', vertical-align='center')
            b-img(slot='aside', src='https://forum.akvabanka.ru/data/avatars/m/0/755.jpg?1449846455', blank-color='#ccc', width='80', alt='placeholder')
            h5.mt-0.mb-1 Нахлыст на водохранилищах
            |  В понимании людей, ни разу не ловивших на мушку
      
</template>

<script>
import articleDay from '@/components/widgets/articleDay/articleDay'

export default {
  name: 'home',
  components: {
    articleDay
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
</style>
