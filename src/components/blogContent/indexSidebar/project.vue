<template>
    <div class="project">
      <el-card>
        <div slot="header" >
          <span style="color: #aaaaaa;font-size: 14px">META</span>
        </div>
        <div class="text item" style="color: #777777;font-size: 14px">
          <router-link to="/" style="margin-bottom: 15px">
            Log in
          </router-link>
          <a href="http://mkaliez.com/" style="margin-bottom: 15px" target="_blank">F_picacho</a>
          <a href="#" style="margin-bottom: 15px" target="_blank">Entries feed</a>
          <a href="#" style="margin-bottom: 15px" target="_blank">pikapikapoi.org</a>
        </div>
      </el-card>
    </div>
</template>

<script>
    export default {
      name: "project",
    }
</script>

<style scoped>
  .project{
    box-shadow: 0 2px 3px rgba(0,0,0,.1);
    margin-bottom: 40px;
  }
  a{
    display: block;
    color: #777;
    transition: color 0.3s;
  }
  a:hover{
    color: #ff8d8d;
    transition: color 0.3s;
  }
</style>
