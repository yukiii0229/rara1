<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function message(){
        $msg = 'こんにちは';
        return $msg;
    }
}