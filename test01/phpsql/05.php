<?php
//header("Content-type: text/html; charset=utf-8");
//MySQLi Ԥ�������
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname ="mydb";
//(MySQLi - �������)
//��������
$conn = new mysqli($servername, $username, $password, $dbname);

// �������
if ($conn->connect_error) {
    die("����ʧ��: " . $conn->connect_error);
}
//Ԥ������
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

//���ò�����ִ��
$firstname = "wzd";
$lastname = "maomao";
$email = "wzd@example.com";
$stmt->execute();
//var_dump($res);
echo "����ɹ�";
$stmt->close();
$conn->close();
