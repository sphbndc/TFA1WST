<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index(): string
    {
        $users = (new UserModel())->findAll();

        return view('layout/header', [
            'title' => 'User accounts | LabDesk POS',
            'active' => 'users',
        ])
            . view('accounts/users', ['users' => $users])
            . view('layout/footer');
    }
}
