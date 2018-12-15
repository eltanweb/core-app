<template lang="pug">
b-Row
  b-col(cols="4", v-for="item in items")
    p {{ item.category.name }}
    b-link.category-name(to="category", v-for="link in item.category.items")
      img.img-thumbnail(:src="link.img")
      | {{ link.title }}
</template>

<script>
export default {
  name: 'category',
  data () {
    return {
      items: [
        {
          category: {
            name: 'категория 1',
            items: [
              {
                title: 'Сладкий медок',
                img: 'https://inokean.ru/preview/890/aW1hZ2VzL2Zpc2gvcGFydXMvMS5qcGc=',
              },
              {
                title: 'Сладкий медок',
                img: 'https://inokean.ru/preview/890/aW1hZ2VzL2Zpc2gvcGFydXMvMS5qcGc=',
              },
            ]
          }
        },
        {
          category: {
            name: 'категория 2',
            items: [
              {
                title: 'Сладкий медок',
                img: 'https://inokean.ru/preview/890/aW1hZ2VzL2Zpc2gvcGFydXMvMS5qcGc=',
              },
              {
                title: 'Сладкий медок',
                img: 'https://inokean.ru/preview/890/aW1hZ2VzL2Zpc2gvcGFydXMvMS5qcGc=',
              },
            ]
          }
        },
        {
          category: {
            name: 'категория 3',
            items: [
              {
                title: 'Сладкий медок',
                img: 'https://inokean.ru/preview/890/aW1hZ2VzL2Zpc2gvcGFydXMvMS5qcGc=',
              },
              {
                title: 'Сладкий медок',
                img: 'https://inokean.ru/preview/890/aW1hZ2VzL2Zpc2gvcGFydXMvMS5qcGc=',
              },
            ]
          }
        },
      ]
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.top-article {
  position: relative;
  display: block;
  padding: 10px;
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
  z-index: 1;
	display: inline-block;  /* don't go wider than image */
  background-size: cover;
  background-position: center;
}
.top-article > .branding {
  z-index: 2;
  color: #fff;
  position: absolute;
  bottom: 0px;
  padding: 8% 12%;
  font-family: Roboto,sans-serif;;
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
  border: 1px solid #ccc;
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
