<template>
  <div id="app">
    <blogAbout/>
    <blogHeader/>
    <div class="blogHeaderOver" style="height: 117px"></div>
    <router-view />
    <blogContent v-if="$route.name!=='addBlog'&&$route.name!=='SingleBlog'"/>
    <blogFooter  v-if="$route.name!=='addBlog'"/>
  </div>
</template>

<script>
  import blogHeader from "./components/blogHeader";
  import blogFooter from "./components/blogFooter";
  import blogContent from "./components/blogContent/blogContent";
  import blogAbout from "./components/blogAbout";
  import SingleBlog from "./components/SingleBlog";
  export default {
    name: 'App',
    components:{
      blogHeader,
      SingleBlog,
      blogFooter,
      blogContent,
      blogAbout

    }
  }
</script>

<style>
  *{
    margin: 0;
    padding: 0;
    font-family: 'Lucida Grande','Helvetica Neue',Helvetica,Arial,Verdana,'PingFang SC','Hiragino Sans GB',STHeiti,'Microsoft YaHei','WenQuanYi Micro Hei','WenQuanYi Micro Hei Mono','WenQuanYi Zen Hei','WenQuanYi Zen Hei Mono','Noto Sans CJK SC','Source Han Sans CN',SimSun,sans-serif;
  }
  *::selection {
    background: #ff6b6b;
    color: #ffffff;
  }
  a{
    text-decoration:none;
  }
  a:focus {
    outline:none;
  }
  .clear:after{
    content: " ";
    clear: both;
    display: block;
    overflow: hidden;
  }
  .content{
    width: 1000px;
    margin: 0 auto;
  }
</style>
