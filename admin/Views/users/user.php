<?php


if (isset($_POST['btn-save'])) { // Khi nhấn submit form thêm mới
    $data = $_POST;

    $user = new User;
    
    $user->create([
        'personal_id' => time(),
        'name' => $data['name'],
        'email' => $data['email'],
        'gender' => $data['gender'],
        'family_id' => 1,
    ]);

    header('location:index.php?module=user');
}
