<?php

$servername = "localhost";
$username = "root";
$password = "123456";

//(MySQLi - 面向对象)
//创建链接
$con = new mysqli($servername, $username, $password);

//检测
if ($con->connect_error) {
    die("连接失败：" . $conn->connect_error);
}
//echo "ok";


//PDO
// try {
//     $conn = new PDO("mysql:host=$servername;", $username, $password);
//     echo "连接成功"; 
// }
// catch(PDOException $e)
// {
//     echo $e->getMessage();
// }

//创建数据库
$sql = "create database myDB";
if($con->query($sql) === TRUE){
    echo "数据库创建成功";
}else{
    echo "Error creating database:". $con-error;
}
$con->close();
?>
