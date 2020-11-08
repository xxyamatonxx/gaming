<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomTellController extends Controller
{
    public function create(){
        return view('random_tell.create');
    }
}
