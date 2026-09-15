<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('layout/header', [
            'title' => 'LabDesk POS | Laboratory supply desk',
            'active' => 'home',
        ])
            . view('pages/home')
            . view('layout/footer');
    }

    public function about(): string
    {
        return view('layout/header', [
            'title' => 'About | LabDesk POS',
            'active' => 'about',
        ])
            . view('pages/about')
            . view('layout/footer');
    }
}
