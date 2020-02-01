<template>
  <div class="links">
    <el-card>
      <div slot="header" >
        <span style="color: #aaaaaa;font-size: 14px">友情链接</span>
      </div>
      <div class="text item" style="color: #777777;font-size: 14px">
        <ul v-for="i in links">
          <li><a :href="i.res">{{ i.name }}</a></li>
        </ul>
      </div>
    </el-card>
  </div>
</template>

<script>
    export default {
      name: "links",
      data(){
        return{
          links:[
            {name:'AiEson’s Blog',res:'#'},
            {name:'Hydrangea’s Homepage',res:'#'},
            {name:'Int100',res:'#'},
            {name:'Rinne',res:'#'},
            {name:'Sakura_Love',res:'#'},
            {name:'WvT Studio',res:'#'},
            {name:'Zendee',res:'#'},
            {name:'叁只仓鼠',res:'#'},
            {name:'酥酥的小卖铺',res:'#'},
            {name:'自称萌萌哒的黄天Hookan',res:'#'}
          ]
        }
      }
    }
</script>

<style scoped>
  .links{
    box-shadow: 0 2px 3px rgba(0,0,0,.1);
    margin-bottom: 40px;
  }
  .links ul{
    list-style: none;
    display: block;
  }
  .links ul li{
    list-style: none;
    margin-bottom: 15px;
  }
  .links ul li a{
    color: #777;
    transition: color 300ms;
  }
  .links ul li a:hover{
    color: #ff9797;
    transition: color 300ms;
  }
</style>
