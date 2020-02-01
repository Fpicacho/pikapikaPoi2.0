<template>
  <div class="headerBox">
    <div class="blogHeader clearfix" id="blogHeader">
      <div class="logo" id="logo" style="clear: both">
        <router-link to="/">
          {{ logoTitle }}
        </router-link>
      </div>
      <div class="links">
        <ul>
          <li v-for="Tag in tagList">
            <router-link :to="Tag.Router">
              {{ Tag.name }}
            </router-link>
          </li>
          <li @click="$store.commit('aboutIs')" style="color: #555555;" class="me"><a href="javascript:void(0);">关于我</a></li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
      name: "blogHeader",
      data() {
        return {
          logoTitle:'F_picacho',
          tagList:[
            {name:'前端',Router:'/onstage'},
            {name:'阅读',Router:'/read'},
            {name:'后端',Router:'/backEnd'},
            {name:'游戏',Router:'/game'},
            {name:'Linux',Router:'/'},
            {name:'Windows',Router:'/'},
            {name:'资源',Router:'/'},
            {name:'绘画',Router:'/'},
          ],
        }
      },
      methods:{
      },

    }
    window.onscroll = function() {
      const logo = document.getElementById('logo');
      const blogHeader = document.getElementById('blogHeader');
      const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      if(scrollTop>=126){
        logo.style.display = 'none';
        blogHeader.style.boxShadow = '0 6px 10px -4px rgba(0, 0, 0, 0.15)';
      }else{
        logo.style.display = 'block';
        blogHeader.style.boxShadow = 'none';
      }
    }
</script>

<style scoped>
  .headerBox{
    width: 100%;
    position: fixed;
    z-index: 100;
  }
  .blogHeader{
    margin-bottom: 10px;
    padding: 10px 0;
    background: #ffffff;
  }
  a{
    text-decoration: none;
    color: #666;
  }
  a:focus {
    outline-style:none;
    -moz-outline-style: none;
  }
  p,ul li{
    display: inline-block;
  }
  .logo{
    margin-top: 15px;
    margin-bottom: 10px;
  }
  .logo a{
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: color 300ms;
  }
  .logo,ul{
    text-align: center;
  }
  p{
    padding: 10px;
    color: #555555;
    transition: color 300ms;
  }
  .logo a:hover{
    color: #888888;
    transition: color 300ms;
  }
  ul,li a{
    padding: 15px;
    font-size: 13px;
    font-weight: 600;
    color: #555555;
    cursor: pointer;
    transition: color 300ms;
  }
  ul,li a:hover{
    color: #ff6b6b;
    transition: color 300ms;
  }
</style>
