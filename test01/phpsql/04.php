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
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@1example.com')";

if (mysqli_multi_query($con,$sql)){
    echo "插入成功";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);