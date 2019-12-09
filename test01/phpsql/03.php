<?php
header("Content-type: text/html; charset=utf-8");
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

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if($con->query($sql) === true){
    echo "插入成功";
}else{
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
?>