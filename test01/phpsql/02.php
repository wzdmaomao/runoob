<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname ="mydb";
//(MySQLi - 面向对象)
//创建链接
$con = new mysqli($servername, $username, $password, $dbname);

//检测
if ($con->connect_error) {
    die("连接失败：" . $conn->connect_error);
}

//创建表
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if($con->query($sql) ===true){
    echo "Table MyGuests created successfully";
}else{
     echo "创建数据表错误: " . $con->error;
}
$con->close();
?>