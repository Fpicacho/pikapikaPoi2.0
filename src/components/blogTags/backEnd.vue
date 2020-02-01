<template>
    <div class="backEnd">
      <div class="backEndTitle">
        <p>printf("hello,world")</p>
      </div>
    </div>
</template>

<script>
    export default {
        name: "backEnd"
    }
</script>

<style scoped>
  .backEnd{
    background: #efefef;
  }
  .backEndTitle{
    height: 300px;
    line-height: 300px;
    text-align: center;
    background: #007991; /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #007991, #78ffd6); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #007991, #78ffd6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }
  p{
    font-size: 35px;
    font-weight: 100;
    color: #fff;
  }
</style>
