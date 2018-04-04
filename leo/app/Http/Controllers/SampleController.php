<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SampleController extends Controller
{
    public function index()
    {
        $result = Auth::validate(['email' => 'nobuyuki.mogi@gmail.com', 'password' => 'mogimogi86']);

        return view('home');
    }
}
