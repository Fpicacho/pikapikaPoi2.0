<template>
  <div class="banner">
    <el-carousel height="890px" direction="vertical" :autoplay="false">
      <el-carousel-item>
        <img src="..\..\assets\blogBgc3.png" alt="">
      </el-carousel-item>
      <el-carousel-item>
        <video src="..\..\assets\blogBgc2.mp4" controls="controls" style="width: 100%;height: 100%;background: #333">
          请更换IE10+或主流内核(Chrome Mozilla)浏览器进行观看!
        </video>
      </el-carousel-item>
    </el-carousel>
  </div>
</template>

<script>
    export default {
      name: "banner",
      created() {
        this.open1();
      },
      methods:{
        open1(){
          const h = this.$createElement;
          this.$notify.info({
            title: '站长提示',
            position: 'bottom-right',
            message: h('i', { style: 'color: teal'}, '首页的Banner右侧有轮播按钮。')
          });
        }
      }
    }
</script>

<style scoped>

</style>
