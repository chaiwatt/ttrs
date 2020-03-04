<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardAssessmentController extends Controller
{
    public function Index(){
        return view('dashboard.assessment.index');
    }
    public function View(){
        return view('dashboard.assessment.view');
    }
}
