<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    //
    public function home()
    {
        return view('contents/home');
    }

    public function show($client_id)
    {
        return __Method__ . ':'.$client_id;
    }
}
