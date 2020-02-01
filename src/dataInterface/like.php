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
//UPDATE blog_like SET likes = 2

//链接数据库通行证
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pikaPikaPoiBlog";
$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = 'SELECT likes FROM blog_like'; //sql语句


$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc()['likes']+=1;
$sql2 = 'UPDATE blog_like SET likes ='.$row;
$result2 = mysqli_query($conn, $sql2);


echo json_encode($row);
mysqli_close($conn);
?>