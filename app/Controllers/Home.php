<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        $data['title'] = 'InLibe';
        return view('welcome_message', $data);
    }
}
