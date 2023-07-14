<?php
$studentId = $_GET['id']; 

$keyOfStudent = null;

foreach ($student as $key => $student) {
    if ($studentId == $student['id']) {
        $keyOfStudent = $key;
        break;
    }
}

if ($keyOfStudent != null) {
    // unset($students[$keyOfStudent]);
    $students[$keyOfStudent] = [
        'name' => 'njhjk',
        'email' => 'hghjg@gmail.com',
    ];
}

// //
// $info = [
//     'name' => 'Nguyễn Van A',
// ];


// $info['name'] = 'Nguyên Van B';

$students = [
    [
        'id' => 1,
        'name' => 'Nguyễn Van A',
        'email' => 'aaaa@gmail.com',
        'address' => 'Hà Nội',
        'gender' => 1, // 1: nam, 2: nữ
    ],
    [
        'id' => 2, // unset($student[?])
        'name' => 'Nguyễn Van B',
        'email' => 'bbbb@gmail.com',
        'address' => 'Vĩnh Phúc',
        'gender' => 1, // 1: nam, 2: nữ
    ],
    [
        'id' => 3,
        'name' => 'Nguyễn Van C',
        'email' => 'cccc@gmail.com',
        'address' => 'Hồ Chí Minh',
        'gender' => 2, // 1: nam, 2: nữ
    ],
    [
        'id' => 4,
        'name' => 'Vũ Đức Đam',
        'email' => 'damvd@gmail.com',
        'address' => 'Hải Dương',
        'gender' => 2, // 1: nam, 2: nữ
    ],
    [
        'id' => 5,
        'name' => 'Xuân Phúc',
        'email' => 'xuanphuc@gmail.com',
        'address' => 'Việt Nam',
        'gender' => 1, // 1: nam, 2: nữ
    ],
    [
        'id' => 6,
        'name' => 'Tấn Dũng',
        'email' => 'xuanphuc@gmail.com',
        'address' => 'Bạc Liêu',
        'gender' => 1, // 1: nam, 2: nữ
    ],
    [
        'id' => 7,
        'name' => 'Nguyễn Văn E',
        'email' => 'eeeee@gmail.com',
        'address' => 'Hà Nội',
        'gender' => 1, // 1: nam, 2: nữ
    ],
];

// for ($i = 1; $i <= 100000; $i++) {
//     $students[] = [
//         'id' => $i,
//         'name' => 'Nguyễn Văn ' . $i,
//         'email' => "email${i}@gmail.com",
//         'address' => 'Hà Nội',
//         'gender' => 1, // 1: nam, 2: nữ
//     ];
// }

// Xử lý tìm kiếm
$gender = $_GET['gender'] ?? null;
$keyword = $_GET['keyword'] ?? null;
$result = $students;

if (!empty($_GET)) {
    if (!empty($gender) || !empty($keyword)) {
        $result = [];

        foreach ($students as $student) {
            $isMatchKeyword = false;
            $isMatchGender = false;

            // Xử lý tìm kiếm thông tin theo từng sinh viên theo keyword
            if (!empty($keyword)) {
                $valueSearchs = [
                    $student['name'],
                    $student['address'],
                    $student['email']
                ];

                if (in_array($keyword, $valueSearchs)) {
                    $isMatchKeyword = true;
                }
            } else {
                $isMatchKeyword = true;
            }

            // Tìm theo giới tính
            if (!empty($gender)) {
                if ($student['gender'] == $gender) {
                    $isMatchGender = true;
                }
            } else {
                $isMatchGender = true;
            }

            if ($isMatchKeyword && $isMatchGender) {
                $result[] = $student;
            }
        }
    }
}
