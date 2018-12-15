<template lang="pug">
b-container.menu-wrapper(fluid='')
    b-container
        b-navbar(toggleable='md')
            b-navbar-toggle(target='nav_collapse')
            b-navbar-brand.logo(to="/") prud.info
            b-collapse#nav_collapse(is-nav='')
                b-navbar-nav
                    b-nav-item.nav-item(v-for="link in menu", :to="link.url") {{ link.title }}
            //- search
</template>

<script>
import search from '@/components/search/search'

export default {
    name: 'navbar',
    components: {
        search
    },
    data () {
        return {
            menu: [
                { title: 'Поплавочная', url: '/',pageTitle:'asdasd' },
                { title: 'Донная', url: '/category' },
                { title: 'Спининг', url: '/page' },
                { title: 'Зимняя рыбалка', url: '/login' },
                { title: 'Рыбы и водоемы', url: '/login' },
                { title: 'Насадки и прикормки', url: '/login' },
            ]
        }
    }
}
</script>

<style scoped>
.navbar {
  height: 55px;
  padding: 0px;
  text-transform: uppercase;
}
.menu-wrapper {
    font-family: Montserrat,sans-serif;
    border-bottom: 1px solid #ccc;
    font-size: 14px;
    font-weight: 600;
}
.nav-link {
  top:10px;
  color: #000 !important;
  line-height: .5;
}
.nav-link:hover {
  color: red !important;
}
.nav-link:active {
  color: red !important;
}
.nav-item {
  padding-top: 6px;
}
.logo {
  color : red;
  font-weight: 700;
  font-size: 30px;
  text-transform: none;
}
.logo:hover {
  color: red;
}
.search-form > input{
  width: 10px;
  color: red;
  cursor: pointer;
  border: 0px solid red;
	border-radius: 10em;
}
.search-form > input:hover{
  background-color: #fff;
}
.search-form > input:focus {
	-webkit-border-radius: 10em;
	-moz-border-radius: 10em;
	border-radius: 10em;
	-webkit-transition: all .5s;
	-moz-transition: all .5s;
	transition: all .5s;
	width: auto;
	padding-left: 10px;
	color: #000;
	background-color: #fff;
	cursor: auto;
}
.search-form > .icon {
  margin-left: -30px;
  font-size: 20px;
  color: red;
  cursor: pointer;
}
</style>
