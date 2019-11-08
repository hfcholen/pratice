<?php 
$redis = new Redis();
$connect = $redis->connect('127.0.0.1',6379);
$redis->set('key1',111);
echo $redis->get('key1');

$servername = "localhost";
$username = "root";
$password = "root";
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password);
 
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "连接成功success";