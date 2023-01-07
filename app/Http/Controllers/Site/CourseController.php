<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){

        return view('Site.course');
    }

    public function coursegrid(){

        return view('Site.coursegrid');
    }

    public function coursemain(){

        return view('Site.coursemain');
    }
    public function coursedetail(){

        return view('Site.coursedetail');
    }
    public function my(){

        return view('Site.mycourse');
    }
}
