<template>
  <div class="onstage">
    <div class="onstageTitle">
      <p>和我一起探索前端魔法!</p>
    </div>
  </div>
</template>

<script>
    export default {
        name: "onstage"
    }
</script>

<style scoped>
  .onstage{
    background: #efefef;
  }
  .onstageTitle{
    height: 300px;
    line-height: 300px;
    text-align: center;
    background: #ff9966; /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #ff9966, #ff5e62); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #ff9966, #ff5e62); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }
  p{
    font-size: 35px;
    font-weight: 100;
    color: #fff;
  }
</style>
