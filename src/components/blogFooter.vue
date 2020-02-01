<template>
    <div class="blogFooter">
      <div class="copyright">
        © 2019-2020<a href=""> www.fpicacho.com</a>· Powered by <a href="">PikaPikaPoiBlog</a> · Theme by <a href="">F_picacho</a>
      </div>
    </div>
</template>

<script>
    export default {
        name: "blogFooter"
    }
</script>

<style scoped>
  a{
    text-decoration:none;
    color: #999;
    transition: color 300ms;
  }
  a:hover{
    color: #aaa;
    transition: color 300ms;
  }
  .blogFooter{
    width: 100%;
    background: #323437;
    text-align: center;
  }
  .copyright{
    height: 120px;
    color: #cacaca;
    line-height: 120px;
    font-size: 12px;
  }
</style>
