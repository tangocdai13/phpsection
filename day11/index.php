<?php

require './Model.php';
require './User.php';
require './Family.php';


$sqlInsert = "INSERT INTO users() VALUE()";

$userModel = new User;

// Create a new User
// $userModel->create([
//     'personal_id' => '435345435',
//     'name' => '<script>Nguyen Van A</script>',
//     'email' => 'aaaaa@gmail.com',
//     'password' => '123@123a',
//     'gender' => 1,
//     'birthday' => '1998-05-20 00:00:00',
//     'family_id' => 1,
// ]);

// Create a new family
$familyObject = new Family;

// $familyObject->create([
//     'family_name' => 'Gia dinh so 100',
//     'address' => 'Ha Noi'
// ]);

$familyObject->update(['family_name' => 'Family 200'], 3);
