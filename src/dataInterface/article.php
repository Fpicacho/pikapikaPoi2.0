<?php
    //json头
    header("Content-Type: application/json;charset=utf-8");
    // 准许跨域请求。
    header("Access-Control-Allow-Origin: * ");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
    if($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
      header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
      exit;
    }
    //链接数据库
    $conn = new mysqli("localhost","root","","pikapikapoiblog");
    //链接测试
    if($conn->connect_error){
        die('Could not connect to database! Please check the validity of link parameters');
    };
    //构建接口
    $action = "read";
    // 返回数据对象
    $res = array('error' => false);
    if (isset($_GET['action'])){
        $action = $_GET['action'];
    };
    //查增删改数据接口
    if($action == "read"){
        $conn->query("set names utf8");
        $result = $conn -> query("SELECT * FROM `blog_article`");
        //var_dump($result);
        $article = array();
        while ($row = $result -> fetch_assoc()){
            array_push($article,$row);
        }
        //var_dump($article);
        $res['article'] = $article;
    };
    if($action == "create"){
        $title = $_POST['title'];
        $author = $_POST['author'];
        $time = $_POST['time'];
        $label = $_POST['label'];
        $titleImg = $_POST['titleImg'];
        $content = $_POST['content'];

        $conn -> query("set names utf8");
        $result =  $conn->query("INSERT INTO `blog_article` (`title`,`author`,`time`,`label`,`titleImg`,`content`)

        VALUES('$title','$author','$time','$label','$titleImg','$content')");
        if($result){
            $res["message"] = "Article adder successfully";
        }else{
            $res['error'] = true;
            $res["message"] = "Article adder failde";
        };
    };
    if($action == "update"){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $time = $_POST['time'];
        $label = $_POST['label'];
        $titleImg = $_POST['titleImg'];
        $content = $_POST['content'];

        $conn -> query("set names utf8");
        $result =  $conn->query("UPDATE `blog_article` SET `title`='$title',`author`='$author',`time`='$time',
        `label`='$label',`titleImg`='$titleImg',`content`='$content' WHERE `id` = '$id'");

        if($result){
            $res["message"] = "Article updaed successfully";
        }else{
            $res['error'] = true;
            $res["message"] = "Article updaed failde";
        };
    };
    if($action == "delete"){
        $id = $_POST['id'];
        $result =  $conn->query("DELETE FROM `blog_article` WHERE `id` = '$id'");
        if($result){
            $res["message"] = "Article delete successfully";
        }else{
            $res['error'] = true;
            $res["message"] = "Article delete failde";
        };
    };

    $conn->close();
    header("Content-type:application/json");
    // 返回数据
    echo json_encode($res);
    die();
?>
