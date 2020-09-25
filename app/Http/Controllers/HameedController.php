<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HameedController extends Controller
{

    public function index()
    {
        return view('hameed');
    }

    public function show($id){
        return 'my id is ' . $id;
    }
}
