<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Index(){
        return view('page.index');
    }
    public function View(){
        return view('page.view');
    }
}
