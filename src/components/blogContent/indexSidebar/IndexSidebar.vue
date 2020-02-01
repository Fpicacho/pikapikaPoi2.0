<template>
  <div class="indexSidebar maxWidth">
    <like/>
    <hitokoto/>
    <links/>
    <project/>
  </div>
</template>

<script>
    import like from './like';
    import hitokoto from './hitokoto';
    import links from './links';
    import project from "./project";
    export default {
        name: "indexSidebar",
        components:{
          like,
          hitokoto,
          links,
          project
        }
    }
</script>

<style scoped>
  .maxWidth{
    width: 240px;
  }
</style>
