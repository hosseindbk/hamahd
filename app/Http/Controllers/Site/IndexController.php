<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Logo;
use App\Models\Slide;
use App\Models\Submenu;
use App\Models\Original_category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $menus              = Menu::select('id' , 'title' , 'slug' , 'submenu')->whereStatus(4)->orderBy('priority')->get();
        $categories         = Menu::select('id' , 'title' , 'route' , 'icon' , 'col_style' , 'long_title')->whereHome_show(1)->whereStatus(4)->get();
        $submenus           = Submenu::select('title' , 'slug' , 'menu_id')->whereStatus(4)->get();
        $slides             = Slide::select('title' , 'file_link')->whereStatus(4)->get();
        $logos              = Logo::select('title' , 'file_link')->first();

        return view('Site.index')
            ->with(compact('menus'))
            ->with(compact('logos'))
            ->with(compact('slides'))
            ->with(compact('categories'))
            ->with(compact('submenus'));
    }

    public function about(){
        return view('Site.about');
    }

    public function contact(){
        return view('Site.contact');
    }

    public function privacypolicy(){
        return view('Site.privacypolicy');
    }

    public function careers(){
        return view('Site.careers');
    }

    public function categories(){
        $menus              = Menu::select('id' , 'title' , 'slug' , 'submenu')->whereStatus(4)->orderBy('priority')->get();
        $categories         = Menu::select('id' , 'title' , 'route' , 'icon' , 'col_style' , 'long_title')->whereHome_show(1)->whereStatus(4)->get();
        $submenus           = Submenu::select('title' , 'slug' , 'menu_id')->whereStatus(4)->get();
        $slides             = Slide::select('title' , 'file_link')->whereStatus(4)->get();
        $logos              = Logo::select('title' , 'file_link')->first();

        return view('Site.categories')
            ->with(compact('menus'))
            ->with(compact('logos'))
            ->with(compact('slides'))
            ->with(compact('categories'))
            ->with(compact('submenus'));
    }

    public function faq(){
        return view('Site.faq');
    }

    public function lessondetails(){
        return view('Site.lessondetails');
    }
}
