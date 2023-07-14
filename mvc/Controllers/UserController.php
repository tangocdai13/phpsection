<?php

class UserController
{
    protected  $userModel;

    public function __construct()
    {
        $this->userModel = new User;
    }

    public function index()
    {
        view('users.index', [
            'title' => 'MVC in PHP',
            'users' => $this->userModel->getAll(),
        ]);
    }

    public function create()
    {
        view('users.form', [
            'headingTitle' => 'Create a new User'
        ]);
    }

    public function store()
    {
        $data = [];
        $this->userModel->create($data);
        // Chuyeenr tran ve danh sach
    }

    public function edit()
    {
        
    }

    public function show()
    {
        echo __METHOD__;
    }

    public function update()
    {

    }
    public function delete()
    {
        
    }
}