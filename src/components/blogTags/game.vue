<template>
  <div class="game">
    <div class="gameTitle">
      <p>「ONE SHOT ONE KILL！」</p>
    </div>
  </div>
</template>

<script>
    export default {
        name: "game"
    }
</script>

<style scoped>
  .game{
    background: #efefef;
  }
  .gameTitle{
    height: 300px;
    line-height: 300px;
    text-align: center;
    background: #ff416c; /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #ff416c, #ff4b2b); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #ff416c, #ff4b2b); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }
  p{
    font-size: 35px;
    font-weight: 100;
    color: #fff;
  }
</style>
