<template>
    <div class="pager">
      <el-pagination
        layout="prev, pager, next"
        :total="50">
      </el-pagination>
    </div>
</template>

<script>
    export default {
        name: "pager"
    }
</script>

<style scoped>
  .pager{
    margin:50px 0;
    text-align:center;
    border-radius: 10px;
  }
</style>
