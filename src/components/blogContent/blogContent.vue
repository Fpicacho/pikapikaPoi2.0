<template>
  <div class="blogContent">
    <div class="content clear">
      <div class="L-partition">
        <articleList/>
        <pager/>
      </div>
      <div class="R-partition">
        <IndexSidebar/>
      </div>
    </div>
  </div>
</template>

<script>
    import articleList from "./articleList/articleList";
    import IndexSidebar from "./indexSidebar/IndexSidebar";
    import pager from "./articleList/pager";
    export default {
        name: "blogContent",
        components:{
          articleList,
          IndexSidebar,
          pager
        }
    }
</script>

<style scoped>

  .blogContent{
    min-height: 1200px;
    padding-top:40px;
    background: #efefef;
    background: url("..\..\assets\background.png") no-repeat;
    background-color: rgba(0, 0, 0, 0);
    background-position-x: 0%;
    background-position-y: 0%;
    background-attachment: scroll;
    background-size: auto;
    background-size: 80%;
    background-position: bottom left;
    background-attachment: fixed;
    background-color: #efefef;
  }
  .L-partition{
    float: left;
  }
  .R-partition{
    float: right;
  }
</style>
