<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = (new CustomerModel())->findAll();

        return view('layout/header', [
            'title' => 'Customer accounts | LabDesk POS',
            'active' => 'customers',
        ])
            . view('accounts/customers', ['customers' => $customers])
            . view('layout/footer');
    }
}
