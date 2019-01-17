<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class HomePageController {
    public function index(){
        return view('HOME');
    }
}