<?php

$bag = [];

$bag[] = 5000;
$bag[] = 10000;
$bag[] = 15000;
$bag['name'] = 'Nguyễn Văn A';
$bag[] = 100;
$bag['email'] = 'example@gmail.com';
$bag[] = 300;
$bag[10] = 1000;
$bag[] = 2000;
$bag[10] = 5000;

echo '<br/>';
echo $bag[2];

echo '<br/>';
echo $bag['name'];

// Xoá phần tử khỏi array
/*
    unset($array[keyName])
*/

echo '<pre>';
print_r($bag);
echo '</pre>';

// unset($bag['email']);

echo '<pre>';
print_r($bag);
echo '</pre>';

// Hàm foreach

foreach ($bag as $key => $value) {
    echo $key . '=>';
    echo $value . '<br/>';
}

// Hàm count()
// Đếm tổng số phần tử trong array
echo count($bag);

// Mảng đa chiều
$students = [
    [
        'id' => 1,
        'name' => 'Nguyễn Van A',
        'email' => 'aaaa@gmail.com',
        'socials' => [
            'facebook' => 'aaa',
            'twitter' => 'testTwitter',
            'google' => [
                'youtube' => 'ytb1',
                'gmail' => 'gmail1',
                'driver' => 'friver1',
            ]
        ]
    ],
    [
        'id' => 2,
        'name' => 'Nguyễn Van B',
        'email' => 'bbbb@gmail.com',
        'socials' => [
            'facebook' => 'bbbb',
            'twitter' => 'testTwitter',
        ]
    ],
    [
        'id' => 3,
        'name' => 'Nguyễn Van C',
        'email' => 'cccc@gmail.com',
        'socials' => [
            'facebook' => 'cccc',
            'twitter' => 'testTwitter',
        ]
    ],
];

// Các hàm xử lý mảng
// implode('string', $array): Chuyển mảng thành chuỗi
$fruits = ['Orange', 'banana'];
echo '<pre>';
print_r($fruits);
echo '</pre>';

echo implode('/', $fruits);

// Hàm explode('string', $string)
// Chuyển chuỗi thành mảng
echo $programingLanguages = 'PHP/Javascript/HTML/CSS/Ruby/Python/Go';
echo '<pre>';
$newArray = explode('/', $programingLanguages);
print_r($newArray);


echo $newString = implode(':', $newArray);

// Hàm array_values & array_keys
// array_values: Lấy ra value của mảng -> biến nó thành mảng mới
// array_keys: Lấy ra key của mảng -> biến nó thành mảng mới

echo '<hr/>';
$user = [
    'name' => 'Nguyễn Văn A',
    'email' => 'aaa@example.com',
    'phone' => '0934535345'
];


echo '<pre>';
print_r($user);

$newUserValue = array_values($user);
$newUserKey = array_keys($user);

print_r($newUserValue);
print_r($newUserKey);

// array_key_exists()
// Kiểm tra xem giá trị có phải là key của mảng hay không

if (array_key_exists('email', $user)) {
    echo 'Có tồn tại key';
} else {
    echo 'Không tồn tại key';
}

// in_array($value, $array)
if (in_array('94535345', $user)) {
    echo 'Có tồn tại giá trị';
} else {
    echo 'Không tồn tại giá trị';
}

array_push($user, 'Test');

print_r($user);


function getSocials($socials) {
    $newSocials = [];

    foreach ($socials as $social) {
        if (is_array($social)) {
            foreach ($social as $item) {
                $newSocials[] = $item;
            }
        } else {
            $newSocials[] = $social;
        }
    }

    return implode(',', $newSocials);
}

?>

<br/><br/>
<br/>
<table width="800" border="1" cellspacing="0" cellpadding="0">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Socicals</td>
    </tr>
    <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['name'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= getSocials($student['socials']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>


<?php
    
?>