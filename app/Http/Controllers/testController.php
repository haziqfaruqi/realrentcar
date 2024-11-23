<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function test()
    {
        // return 'This is a test!';

        return view('test');
    }

    public function test2()
    {
        return 'this is test2';
    }
}
