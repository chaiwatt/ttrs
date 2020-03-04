<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberCompanyController extends Controller
{
    public function Index(){
        return view('member.company.index');
    }
}
