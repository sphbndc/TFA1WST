<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        // Account data is kept here until a persistent data layer is added.
        $customers = [
            ['full_name' => 'Mara Santos', 'email' => 'mara.santos@northstarlab.ph', 'phone' => '0917 555 0142', 'organization' => 'Northstar Diagnostics'],
            ['full_name' => 'Dr. Paolo Reyes', 'email' => 'paolo.reyes@medcore.ph', 'phone' => '0918 555 0228', 'organization' => 'MedCore Clinical Lab'],
            ['full_name' => 'Angela Dela Cruz', 'email' => 'angela.delacruz@qc-research.edu.ph', 'phone' => '0920 555 0316', 'organization' => 'QC Research Institute'],
            ['full_name' => 'Luis Villanueva', 'email' => 'luis.villanueva@pacificquality.ph', 'phone' => '0919 555 0477', 'organization' => 'Pacific Quality Systems'],
            ['full_name' => 'Bea Navarro', 'email' => 'bea.navarro@greenfieldfoods.ph', 'phone' => '0922 555 0589', 'organization' => 'Greenfield Food Safety'],
        ];

        return view('layout/header', [
            'title' => 'Customer accounts | LabDesk POS',
            'active' => 'customers',
        ])
            . view('accounts/customers', ['customers' => $customers])
            . view('layout/footer');
    }
}
