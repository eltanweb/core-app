import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/main/Home'
import Login from "@/components/login/Login";
import Registration from "@/components/login/Registration";
import Category from "@/components/category/Category";
import Page from "@/components/page/Page";


Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/login',
      name: 'Login',
      component: Login
    },
    {
      path: '/registration',
      name: 'Registration',
      component: Registration
    },
    {
      path: '/category',
      name: 'Category',
      component: Category
    },
    {
      path: '/page',
      name: 'Page',
      component: Page
    }
  ]
})
