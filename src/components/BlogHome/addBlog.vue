<template>
    <div class="addBlog content">
      <el-input class="blogTitle" v-model="title" placeholder="Blog标题" ></el-input>
      <div class="edit_container">
        <quill-editor
          v-model="content"
          ref="myQuillEditor"
          :options="editorOption"
          @blur="onEditorBlur($event)" @focus="onEditorFocus($event)"
          @change="onEditorChange($event)">
        </quill-editor>
        <div class="post" style="margin: 20px 0">
          <div style="display: inline-block">
            <el-radio v-model="radio" label="前端">前端</el-radio>
            <el-radio v-model="radio" label="阅读">阅读</el-radio>
            <el-radio v-model="radio" label="后端">后端</el-radio>
            <el-radio v-model="radio" label="游戏">游戏</el-radio>
            <el-radio v-model="radio" label="Linux">Linux</el-radio>
            <el-radio v-model="radio" label="Windows">Windows</el-radio>
          </div>
          <el-button type="primary" @click="saveHtml" style="margin-left: 408px">发布</el-button>
        </div>
      </div>
    </div>
</template>

<script>
    import qs from 'qs';
    export default {
        name: "addBlog",
      created(){
        this.getTime();
      },
      data(){
        return {
          title: '',
          content: `<p>hello world</p>`,
          labels: ['前端'],
          author:'F_picacho',
          nowTime:"",
          radio:'前端',
          editorOption: {}
        }
      },
      computed: {
        editor() {
          return this.$refs.myQuillEditor.quill;
        },
        getTime(){
          setInterval(()=>{
            //new Date() new一个data对象，当前日期和时间
            //toLocaleString() 方法可根据本地时间把 Date 对象转换为字符串，并返回结果。
            this.nowTime = new Date().toLocaleString();
          },1000)
        }
      },
      methods: {
        onEditorReady(editor) { // 准备编辑器
        },
        onEditorBlur(){}, // 失去焦点事件
        onEditorFocus(){}, // 获得焦点事件
        onEditorChange(){}, // 内容改变事件
        saveHtml:function(event){
          var data = {
            title:this.title,
            content:this.content,
            author:this.author,
            time:this.nowTime,
            label:this.radio,
            titleImg:'null'
          };
          var url = 'http://127.0.0.1/article.php?action=create';
          this.axios.post(
            url,
            qs.stringify(data),
            {headers: {'Content-Type': 'application/x-www-form-urlencoded'}}
          ).then(result => {
            this.$message({
              message: 'BLOG发布成功~',
              type: 'success',
              showClose: true
            });
            this.$router.push('/');
          })
        }
      },
    }
</script>

<style scoped>
  #addBlog {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }
  .blogTitle{
    margin-bottom: 10px;
  }
</style>
<style>
  .ql-editor{
    height: 700px;
  }
</style>
