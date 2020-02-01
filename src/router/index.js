import Vue from 'vue'
import Router from 'vue-router'
import BlogHome from "../components/BlogHome/BlogHome";
import addBlog from "../components/BlogHome/addBlog";

import onstage from "../components/blogTags/onstage";
import read from "../components/blogTags/read";
import backEnd from "../components/blogTags/backEnd";
import game from "../components/blogTags/game";
import SingleBlog from "../components/SingleBlog";

Vue.use(Router);

export default new Router({
  routes: [
    {
      path: '/',
      name: 'BlogHome',
      component: BlogHome
    },
    {
      path: '/onstage',
      name: 'onstage',
      component: onstage
    },
    {
      path: '/read',
      name: 'read',
      component: read
    },
    {
      path: '/backEnd',
      name: 'backEnd',
      component: backEnd
    },
    {
      path: '/game',
      name: 'game',
      component: game
    },
    {
      path: '/addBlog',
      name: 'addBlog',
      component: addBlog
    },
    {
      path: '/SingleBlog/:id',
      name: 'SingleBlog',
      component: SingleBlog
    }
  ],
  mode:'history'
})
