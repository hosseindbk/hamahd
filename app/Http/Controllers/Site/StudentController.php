<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentdetail(){
        return view('Site.studentdetail');
    }
    public function teachers(){
        return view('Site.teachers');
    }
}
