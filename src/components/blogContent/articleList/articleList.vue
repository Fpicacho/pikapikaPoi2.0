<template>
  <div class="articleList">
    <div class="article" v-for="blog in filteredBlogs">
      <img class="articleImg" src="../../../assets/blogBgc3.png" alt="">
      <div class="articleBox clear">
        <a href="" class="blogTitle">{{blog.title}}</a>
        <p class="blogMeta">{{blog.time}} • {{ blog.label }} • {{ blog.author }}</p>
        <p class="blogSummary" style="word-wrap:break-word">
          {{blog.content|htmlfilter|snippet}}
        </p>
        <router-link :to="'/SingleBlog/'+blog.ID" class="blogMore">
          阅读更多<i class="fa fa-angle-right" aria-hidden="true"></i>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
      name: "articleList",
      data() {
        return {
          filteredBlogs:{}
        };
      },
      created(){
        this.axios.get('http://127.0.0.1/article.php?action=read')
          .then((data)=> {
            this.filteredBlogs = data.data.article;
            // .slice(0,2)
            // console.log(this.filteredBlogs)
       });
      },
      filters: {
        htmlfilter: function (val) {
          return val.replace(/<(style|script|iframe)[^>]*?>[\s\S]+?<\/\1\s*>/gi,'').replace(/<[^>]+?>/g,'').replace(/\s+/g,' ').replace(/ /g,' ').replace(/>/g,' ');
        },
        snippet: function (value) {
          return value.slice(0,170) + '...'
        }
      }
    }
</script>

<style scoped>
  .articleList{
    width: 740px;
    border-radius: 3px;
    font-size: 14px;

  }
  .articleList .article{
    margin-bottom: 20px;
  }
  .articleList .article .articleImg{
    width: 100%;
    height: 220px;
    border-radius:3px 3px 0 0;
  }
  .articleList .article .articleBox{
    padding: 20px;
    background: #fff;
    margin-top: -3px;
    border-radius: 0 0 3px 3px;
    box-shadow: 0 2px 3px rgba(0,0,0,.1);
  }
  .articleList .article .articleBox .blogTitle{
    display: block;
    font-size: 23px;
    color: #111;
    margin-bottom: 10px;
    transition: color 0.3s;
  }
  .articleList .article .articleBox .blogTitle:hover{
    transition: color 0.3s;
    color: #ff6b6b;
  }
  .articleList .article .articleBox .blogMeta{
    color: #444;
    margin-bottom: 14px;
  }
  .articleList .article .articleBox .blogSummary{
    color: #333;
  }
  .articleList .article .articleBox .blogMore{
    color: #ff6b6b;
    float: right;
  }
</style>
