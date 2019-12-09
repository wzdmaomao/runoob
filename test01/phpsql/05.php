<?php
//header("Content-type: text/html; charset=utf-8");
//MySQLi 预处理语句
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname ="mydb";
//(MySQLi - 面向对象)
//创建链接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
//预处理及绑定
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

//设置参数并执行
$firstname = "wzd";
$lastname = "maomao";
$email = "wzd@example.com";
$stmt->execute();
//var_dump($res);
echo "插入成功";
$stmt->close();
$conn->close();
