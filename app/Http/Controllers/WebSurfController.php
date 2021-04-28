<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebSurfController extends Controller
{
    public function ShowHome()
    {
        return view ('Citas.home');
    }
    public function ShowCreate()
    {
        return view ('Citas.create');
    }
    public function ShowEdit()
    {
        return view ('Citas.edit');
    }
}
