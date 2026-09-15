<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        // Account data is kept here until a persistent data layer is added.
        $users = [
            ['username' => 'amartinez', 'full_name' => 'Ari Martinez', 'role' => 'Sales coordinator', 'status' => 'Active'],
            ['username' => 'jlim', 'full_name' => 'Jonah Lim', 'role' => 'Laboratory specialist', 'status' => 'Active'],
            ['username' => 'rgarcia', 'full_name' => 'Rina Garcia', 'role' => 'Account manager', 'status' => 'Active'],
            ['username' => 'tromero', 'full_name' => 'Theo Romero', 'role' => 'Operations lead', 'status' => 'Active'],
            ['username' => 'ncastillo', 'full_name' => 'Nica Castillo', 'role' => 'Support associate', 'status' => 'Invited'],
        ];

        return view('layout/header', [
            'title' => 'User accounts | LabDesk POS',
            'active' => 'users',
        ])
            . view('accounts/users', ['users' => $users])
            . view('layout/footer');
    }
}
