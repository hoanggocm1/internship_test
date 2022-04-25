<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'testphp';

$conn = mysqli_connect($servername, $username, $password, $database);
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$content = $_POST['content'];
$query = $conn->query("INSERT INTO customers (fullname,email,phone,content) VALUES (N'$name',N'$email',N'$phone',N'$content')");

mysqli_close($conn);
