<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
        return view('welcome_message');
    }
    public function fernando(): string 
    {
        return view('fernando');
    }
}