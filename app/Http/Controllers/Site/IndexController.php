<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Slide;
use App\Models\Submenu;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $menus      = Menu::select('id' , 'title' , 'slug' , 'submenu')->whereStatus('4')->get();
        $submenus   = Submenu::select('title' , 'slug' , 'menu_id')->whereStatus('4')->get();
        $slides     = Slide::select('title1' ,'title2' , 'image')->whereStatus('4')->get();

        return view('Site.index')
            ->with(compact('menus'))
            ->with(compact('slides'))
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
        return view('Site.categories');
    }

    public function faq(){
        return view('Site.faq');
    }

    public function lessondetails(){
        return view('Site.lessondetails');
    }
}
