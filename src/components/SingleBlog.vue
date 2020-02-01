<template>
  <div class="SingleBlog">
    <div class="content" style="overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
      <div v-html="blog.content"></div>
    </div>
  </div>
</template>

<script>
    export default {
      name: "SingleBlog",
      data(){
        return{
          id:this.$route.params.id,
          blog:'',
        }
      },
      mounted() {
        this.axios.get('http://127.0.0.1/article.php?action=read')
          .then((data)=> {
            console.log(data.data.article);
            for (var key in data.data.article){
              if (data.data.article[key].ID === this.id){
                  this.blog = data.data.article[key];
                  break;
              }
            }
          });
      }
    }
</script>

<style scoped>
  .SingleBlog{
    background: #efefef;
    background: url(/static/img/background.0d808aa.png) no-repeat;
    background-color: rgba(0, 0, 0, 0);
    background-position-x: 0%;
    background-position-y: 0%;
    background-attachment: scroll;
    background-size: auto;
    background-color: rgba(0, 0, 0, 0);
    background-position-x: 0%;
    background-position-y: 0%;
    background-attachment: scroll;
    background-size: auto;
    background-size: 80%;
    background-position: bottom left;
    background-attachment: fixed;
    background-color:
      #efefef;
  }
</style>
