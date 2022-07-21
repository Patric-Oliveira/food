<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
     
    private $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
    }

    public function index()
    {

        $data = [

            'title' => 'Listando os usuários',
            'users' => $this->userModel->findAll(),

        ];

        return view('Admin/Users/index', $data);

    }
}
