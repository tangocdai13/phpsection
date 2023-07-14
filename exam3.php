<?php

$email = true;

echo 100;

echo '<br/>';

echo '<strong>';

function getEmail() {
    return 'example@gmail.com';
}

// echo getEmail();

// echo '<br/>' . $email;

echo '<hr/>';

echo gettype($email);

$age = '100';

echo '<hr/>';

echo gettype((int) $age);

$firstName = "Mr. ";
$lastName = "Hùng";

// echo $firstName . $lastName;
// In ra chữ "Xin chào Mr.Hung". Chỉ sử dụng 1 lần echo ko đc dùng thêm biến nào

echo "<font color='red'>Xin chào ${firstName} {$lastName}</font>";

// if (isset($address)) {
//     echo 'Address tồn tại';
// } else {
//     echo 'Address không tồn tại';
// }

// $address = 'Hà Nội';
echo '<hr/>';
echo isset($address) ? 'Tồn tại Address' : 'Không tồn tại Address';

//echo $address ?? 'Không tồn tại';

echo 'SUNTECH';
