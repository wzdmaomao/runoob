<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname ="mydb";
//(MySQLi - �������)
//��������
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("����ʧ��".$conn->connect_error);
}

$sql = 'select id, firstname, lastname from myguests';
$result = $conn->query($sql);
if($result->num_rows > 0){
    //���
    while ($row = $result->fetch_assoc()){
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}else{
    echo "û����";
}
$conn->close();