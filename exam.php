<?php

$mysqli = new PDO("mysql:host=localhost;dbname=your_database", 'username', 'your_password');
$query = $mysqli->query("SELECT * FROM users");

### query: Thực thi câu SQL
$db = $mysqli->query("SELECT * FROM users");

### fetch(): Lấy ra 1 bản ghi
$user = $db->fetch();

### fetchAll(): Lấy ra tất cả bản ghi
$users = $db->fetchAll();

### rowCount(): Đếm tổng số bản ghi
$total = $db->rowCount();

### fetchAll(PDO::FETCH_ASSOC); // Lấy ra dưới dạng array và ko dupplicate value
$users = $db->fetchAll();

### fetchObject(): Lấy dữ liệu object

$users = [];
while ($user = $stmt->fetchObject()) {
    $users[] = $user;
}

echo '<pre>';
print_r($users);
echo '</pre>';
