<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Menu;
use App\Models\Submenu;

class CourseController extends Controller
{
    public function index(){

        $menus = Menu::all();
        $submenus = Submenu::all();

        return view('Site.course')->with(compact(['menus' , 'submenus']));
    }
}
