<template>
  <div class="hitokoto">
    <el-card>
      <div slot="header" >
        <span style="color: #aaaaaa;font-size: 14px">Hitokoto - 一言</span>
      </div>
      <div class="text item" style="color: #777777;font-size: 14px">
        {{ hitokoto }}
      </div>
    </el-card>
  </div>
</template>

<script>

    export default {
      name: "hitokoto",
      data(){
        return{
          hitokoto:'链接御坂网络中...'
        }
      },
      created() {
        this.axios.get("https://v1.hitokoto.cn/",).then(data=> (this.hitokoto = data.data.hitokoto));
      }
    }
</script>

<style scoped>
  .hitokoto{
    width: 240px;height: auto;
    box-shadow: 0 2px 3px rgba(0,0,0,.1);
    border-radius: 3px;margin-bottom: 40px;
  }

</style>
