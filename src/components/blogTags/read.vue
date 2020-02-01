<template>
  <div class="read">
    <div class="readTitle">
      <p>读万卷书，行万里路。</p>
    </div>
  </div>
</template>

<script>
    export default {
        name: "read"
    }
</script>

<style scoped>
  .read{
    background: #efefef;
  }
  .readTitle{
    height: 300px;
    line-height: 300px;
    text-align: center;
    background: #11998e; /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #11998e, #38ef7d); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #11998e, #38ef7d); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }
  p{
    font-size: 35px;
    font-weight: 100;
    color: #fff;
  }
</style>
