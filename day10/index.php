<?php

require './Model.php';
require './User.php';
require './Family.php';

$userObject = new User;

$sqlInserUser = "INSERT INTO users(personal_id,name,email,password,avatar,gender,birthday,family_id) 
    VALUES('3454353455', 'Nguyen Manh Hung', 'hungnm@gmail.com', 1233444,'', 1, '1998-05-12 00:00:00',1)";


// $userObject->query($sqlInserUser);

$sqlUpdate = "UPDATE users SET email='testupdate@gmail.com' WHERE id = '15'";
$userObject->query($sqlUpdate);

// Delete
$userObject->query('DELETE FROM users WHERE id = 16');

$userObject->query('SELECT * FROM users');
$users = $userObject->getAll();

// Thêm mới user
User::create([
    'personal_id' => $value,
    'name' => $value,
    'email' => $value,
]);

User::update()
User::all()
User::get()
User::find()


## ORM && Active Record

## composer + mvc

require_once './views/users/index.php';
