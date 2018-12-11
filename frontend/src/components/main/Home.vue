<template lang="pug">
b-container
  b-row
    b-col(cols="8")
      b-link.top-article(to="/page")
        .images
          img.img-fluid(src="https://inokean.ru/preview/890/aW1hZ2VzL2Zpc2gvcGFydXMvMS5qcGc=")
        .branding
          div.theme
            | Статья дня
          div.title
            | Читайте шестой номер «Рыбачьте с нами»!
      b-row.more-top
        b-col(cols="6")
          b-media(left-align='', vertical-align='center')
            b-img(slot='aside', src='https://forum.akvabanka.ru/data/avatars/m/0/755.jpg?1449846455', blank-color='#ccc', width='80', alt='placeholder')
            h5.mt-0.mb-1 Нахлыст на водохранилищах
            |  В понимании людей, ни разу не ловивших на мушку
        b-col(cols="6")
           b-media(left-align='', vertical-align='center')
            b-img(slot='aside', src='https://forum.akvabanka.ru/data/avatars/m/0/755.jpg?1449846455', blank-color='#ccc', width='80', alt='placeholder')
            h5.mt-0.mb-1 Нахлыст на водохранилищах
            |  В понимании людей, ни разу не ловивших на мушку
      b-row
        b-col(cols="5")
          img.img-thumbnail(src="http://www.zoofirma.ru/images/stories/2012/05/17/ryba-sobaka2.jpg")
        b-col(cols="7")
          h4 Открытые фидерные кормушки
          | Наши читатели задают много вопросов по фидерной ловле, особенно те, кто только собирается о...
      b-row
        b-col(cols="5")
          img.img-thumbnail(src="http://www.zoofirma.ru/images/stories/2012/05/17/ryba-sobaka2.jpg")
        b-col(cols="7")
           h4 Открытые фидерные кормушки
           | Наши читатели задают много вопросов по фидерной ловле, особенно те, кто только собирается о...




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
export default {
  name: 'home',
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
.top-article {
  position: relative;
  display: block;
  padding-top: 10px;
}
.top-article:after {
  content: ''; 
  position: absolute; 
  top: 0; 
  left: 0; 
  right: 0; 
  bottom: 0; 
  background: rgba(0,0,0,.5);  
  opacity: 0;
}
.top-article > .images {
	display: inline-block;  /* don't go wider than image */
  background-size: cover;
  background-position: center;
}
.top-article > .branding {
  color: #fff;
  position: absolute;
  bottom: 0px;
  width: 100%;
  padding: 8% 12%;
  font-family: Roboto,sans-serif;
  background: linear-gradient(to bottom, transparent, #000);
  opacity: 0.81;
}
.top-article > .branding > .theme {
  font-size : 17px;
  font-weight: 700;
  text-transform: uppercase;
}
.top-article > .branding > .title {
  font-size : 18px;
  font-weight: 700;
  text-transform: uppercase;
}
.more-top {
  color: #000;
  padding: 10px;
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
</style>
