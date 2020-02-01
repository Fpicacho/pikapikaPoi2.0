<template>
  <div class="like" @click="addLike">
    <p style="font-size: 20px;margin-bottom: 5px;font-weight: bold">
      <i class="fa fa-heart" aria-hidden="true">&nbsp</i>
      {{ like }}
    </p>
    <span style="font-size: 14px;font-weight: bold">我觉得这个博主OK</span>
  </div>
</template>

<script>
    export default {
      name: "like",
      created() {
        this.axios.get("http://127.0.0.1/like.php",).then(data=> (this.like = data.data));
      },
      data() {
        return {
          like:'连接至御坂网络中...'
        }
      },
      methods:{
        addLike(){
          this.axios.get("http://127.0.0.1/like.php",).then(data=> (this.like = data.data));
        }
      }
    }
</script>

<style scoped>
  .like{
    margin-bottom: 40px;
    box-shadow: 0 2px 3px rgba(0,0,0,.1);
    cursor: pointer;
    border-radius: 3px;
    background: #ff9797;
    text-align: center;
    user-select:none;
    color: #fff;
    height: auto;
    padding: 15px 0;
    transition: background 0.3s;
  }
  .like:hover{
    background: #ff8d8d;
    transition: background 0.3s;
  }
</style>
