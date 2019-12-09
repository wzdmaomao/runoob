<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname ="mydb";
//(MySQLi - 面向对象)
//创建链接
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("连接失败".$conn->connect_error);
}

$sql = 'select id, firstname, lastname from myguests';
$result = $conn->query($sql);
if($result->num_rows > 0){
    //输出
    while ($row = $result->fetch_assoc()){
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}else{
    echo "没数据";
}
$conn->close();