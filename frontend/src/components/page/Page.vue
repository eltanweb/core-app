<template lang="pug">
b-container
  b-row.banner 
    | Реклама
  b-row
    b-col(cols="8")
      b-row.tags
        ul
          b-link.tag-item(to="/page", v-for="tag in tags")
            li {{ tag.title }}
      b-row
        h1 {{ article.title }}
        p {{ article.body }}
        template
          div
            b-carousel#carousel1(style='text-shadow: 1px 1px 2px #333;', controls='', indicators='', background='#ababab', :interval='4000', img-width='1024', img-height='480', v-model='slide', @sliding-start='onSlideStart', @sliding-end='onSlideEnd')
              // Text slides with image
              b-carousel-slide(caption='First slide', text='Nulla vitae elit libero, a pharetra augue mollis interdum.', img-src='https://picsum.photos/1024/480/?image=52')
              // Slides with custom text
              b-carousel-slide(img-src='https://picsum.photos/1024/480/?image=54')
                h1 Hello world!
              // Slides with image only
              b-carousel-slide(img-src='https://picsum.photos/1024/480/?image=58')
              // Slides with img slot
              // Note the classes .d-block and .img-fluid to prevent browser default image alignment
              b-carousel-slide
                img.d-block.img-fluid.w-100(slot='img', width='1024', height='480', src='https://picsum.photos/1024/480/?image=55', alt='image slot')
              // Slide with blank fluid image to maintain slide aspect ratio
              b-carousel-slide(caption='Blank Image', img-blank='', img-alt='Blank image')
                p
                  | Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                  | eros felis, tincidunt a tincidunt eget, convallis vel est. Ut pellentesque
                  | ut lacus vel interdum.
                p.mt-4
                  | Slide #: {{ slide }}
                  br
                  |       Sliding: {{ sliding }}
        p {{ article.body2 }}        
    b-col(cols="4")
      img(src='https://tpc.googlesyndication.com/simgad/11875537060489082839')

      


</template>

<script>
export default {
  name: 'Page',
  data () {
    return {
      tags: [
        {title:'Рыбалка', url:'fishing'},
        {title:'Даша', url:'fishing'},
        {title:'Рыбалка', url:'fishing'},
        {title:'Рыбалка2', url:'fishing'},
      ],
      article: {
          title: 'Открытые фидерные кормушки',
          body: 'Наши читатели задают много вопросов по фидерной ловле, особенно те, кто только собирается осваивать этот интересный и продуктивный способ ловли. Больше всего проблем возникает при выборе фидерных кормушек и оснасток. Начну с кормушек.',
          datePUblication: '2018-09-09',
          body2: '<hr>Представляем Вам рыболововедческую мини энциклопедию, отражающую все таинства одного из самых загадочных явлений в мире, заставляющего миллионы людей куда-то ехать за сотни километров. В поисках заветного местечка они готовы брести с тяжёлыми рюкзаками по труднопроходимой местности в дождь, грязь, слякоть, стужу, зной. Затем мёрзнуть на пронизывающем ветру; терпеть укусы насекомых, замерев и боясь пошевельнуться в томительном предвкушении поимки добычи…'+
          'Ловля рыбы - это нечто неописуемое! Настолько восхитительный процесс, что длинными зимними ночами любителям снятся подрагивающие поплавки, подсечки, срывы и смеющиеся уплывающие рыбины невероятных размеров. Трепетное ожидание весны, а там …очередное обострение, начало сезона ловли, и вновь «понеслась душа в рай!».'+
          'Безмятежный покой. Тишина, прерываемая редкими всплесками. Созерцание поплавка. Тотальное погружение в действие. Всецелое слияние с природой. Состояние, близкое к тому, что эзотерики называют моментом «Здесь и сейчас». А не это ли медитативное состояние является главной компонентой процесса, которая зовёт и манит вновь и вновь, несмотря на неудобства, отсутствие комфорта, укусы насекомых, плохую погоду и прочие-прочие неприятности, сопровождающие рыбалку?'+
          'Вторая главная компонента рыболовного процесса — азарт и страсть, перевешивающие всё! Ещё в 19 веке известный зоолог Сабанеев Л.П., организатор рыболовного дела в стране, автор знаменитой книги «Рыбы России», отметил, что ловля рыбы сравнима с творчеством, которое требует умения изысканно и хитро выуживать добычу из водоёмов, включая при этом незаурядные качества ума.'+
          'Ему принадлежит гениальное высказывание: «Время, проведенное рыболовом на рыбалке, в счёт жизни не засчитывается». Оно резко отличается от обыденной суетности. На природе каждого человека охватывает умиление, покой, появляются возвышенные чистые мысли, проявляются чистейшие и благороднейшие порывы души.'

      }
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.banner {
  background: #fff;
  border: 1px solid #e8e8e8;
  height: 75px;
}
.tags > ul> .tag-item {
  display: inline-block;
  margin: 10px 10px;
  padding: 7px 15px;
  border-radius: 50px;
  font-size: 13px;
  border: 1px solid #ccc;
  list-style-type: none;
  color: #7c7c7c;
}
.tags > ul> .tag-item:hover {
  display: inline-block;
  margin: 10px 10px;
  padding: 7px 15px;
  border-radius: 50px;
  font-size: 13px;
  border: 1px solid #f23d3a;
  list-style-type: none;
  color: #f23d3a;
  text-decoration: none;
}
</style>
