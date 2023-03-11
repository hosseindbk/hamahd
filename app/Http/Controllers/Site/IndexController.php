<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Logo;
use App\Models\Slide;
use App\Models\Book;
use App\Models\Gallerymusic;
use App\Models\Gallerypic;
use App\Models\Galleryclip;
use App\Models\Submenu;
use App\Models\Original_category;
use App\Models\Program;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $menus              = Menu::select('id' , 'title' , 'slug' , 'submenu' , 'priority')->whereStatus(4)->orderBy('priority')->get();
        $categories         = Menu::select('id' , 'title' , 'route' , 'icon' , 'col_style' , 'long_title')->whereHome_show(1)->whereStatus(4)->get();
        $videos             = Galleryclip::whereStatus(4)->get();
        $musics             = Gallerymusic::whereStatus(4)->get();
        $pics               = Gallerypic::whereStatus(4)->get();
        $programs           = Program::select('id' , 'title' , 'slug' , 'file_link')->whereStatus(4)->get();
        $submenus           = Submenu::select('title' , 'slug' , 'menu_id')->whereStatus(4)->get();
        $slides             = Slide::select('title' , 'file_link')->whereStatus(4)->get();
        $logos              = Logo::select('title' , 'file_link')->first();

        return view('Site.index')
            ->with(compact('menus'))
            ->with(compact('programs'))
            ->with(compact('videos'))
            ->with(compact('musics'))
            ->with(compact('pics'))
            ->with(compact('logos'))
            ->with(compact('slides'))
            ->with(compact('categories'))
            ->with(compact('submenus'));
    }

    public function categories(){
        $menus              = Menu::select('id' , 'title' , 'slug' , 'submenu' , 'priority')->whereStatus(4)->orderBy('priority')->get();
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

    public function pictures(){
        $menus              = Menu::select('id' , 'title' , 'slug' , 'submenu' , 'priority')->whereStatus(4)->orderBy('priority')->get();
        $pics               = Gallerypic::whereStatus(4)->get();
        $submenus           = Submenu::select('title' , 'slug' , 'menu_id')->whereStatus(4)->get();
        $slides             = Slide::select('title' , 'file_link')->whereStatus(4)->get();
        $logos              = Logo::select('title' , 'file_link')->first();

        return view('Site.pictures')
            ->with(compact('menus'))
            ->with(compact('logos'))
            ->with(compact('slides'))
            ->with(compact('pics'))
            ->with(compact('submenus'));
    }

    public function picturedetail($slug){
        $menus              = Menu::select('id' , 'title' , 'slug' , 'submenu' , 'priority')->whereStatus(4)->orderBy('priority')->get();
        $pics               = Gallerypic::whereSlug($slug)->get();
        $submenus           = Submenu::select('title' , 'slug' , 'menu_id')->whereStatus(4)->get();
        $slides             = Slide::select('title' , 'file_link')->whereStatus(4)->get();
        $logos              = Logo::select('title' , 'file_link')->first();

        return view('Site.picturedetail')
            ->with(compact('menus'))
            ->with(compact('logos'))
            ->with(compact('slides'))
            ->with(compact('pics'))
            ->with(compact('submenus'));
    }

    public function musics(){
        $menus              = Menu::select('id' , 'title' , 'slug' , 'submenu' , 'priority')->whereStatus(4)->orderBy('priority')->get();
        $musics             = Gallerymusic::whereStatus(4)->get();
        $submenus           = Submenu::select('title' , 'slug' , 'menu_id')->whereStatus(4)->get();
        $slides             = Slide::select('title' , 'file_link')->whereStatus(4)->get();
        $logos              = Logo::select('title' , 'file_link')->first();

        return view('Site.music')
            ->with(compact('menus'))
            ->with(compact('logos'))
            ->with(compact('slides'))
            ->with(compact('musics'))
            ->with(compact('submenus'));
    }

    public function musicdetail($slug){
        $menus              = Menu::select('id' , 'title' , 'slug' , 'submenu' , 'priority')->whereStatus(4)->orderBy('priority')->get();
        $musics             = Gallerymusic::whereSlug($slug)->get();
        $submenus           = Submenu::select('title' , 'slug' , 'menu_id')->whereStatus(4)->get();
        $slides             = Slide::select('title' , 'file_link')->whereStatus(4)->get();
        $logos              = Logo::select('title' , 'file_link')->first();

        return view('Site.musicdetail')
            ->with(compact('menus'))
            ->with(compact('logos'))
            ->with(compact('slides'))
            ->with(compact('musics'))
            ->with(compact('submenus'));
    }

    public function videos(){
        $menus              = Menu::select('id' , 'title' , 'slug' , 'submenu' , 'priority')->whereStatus(4)->orderBy('priority')->get();
        $videos             = Galleryclip::whereStatus(4)->get();
        $submenus           = Submenu::select('title' , 'slug' , 'menu_id')->whereStatus(4)->get();
        $slides             = Slide::select('title' , 'file_link')->whereStatus(4)->get();
        $logos              = Logo::select('title' , 'file_link')->first();

        return view('Site.videos')
            ->with(compact('menus'))
            ->with(compact('logos'))
            ->with(compact('slides'))
            ->with(compact('videos'))
            ->with(compact('submenus'));
    }

    public function videodetail($slug){
        $menus              = Menu::select('id' , 'title' , 'slug' , 'submenu' , 'priority')->whereStatus(4)->orderBy('priority')->get();
        $videos             = Galleryclip::whereSlug($slug)->first();
        $allvideos             = Galleryclip::whereStatus(4)->get();
        $submenus           = Submenu::select('title' , 'slug' , 'menu_id')->whereStatus(4)->get();
        $slides             = Slide::select('title' , 'file_link')->whereStatus(4)->get();
        $logos              = Logo::select('title' , 'file_link')->first();

        return view('Site.videodetail')
            ->with(compact('menus'))
            ->with(compact('logos'))
            ->with(compact('slides'))
            ->with(compact('videos'))
            ->with(compact('allvideos'))
            ->with(compact('submenus'));
    }

    public function books(){
        $menus              = Menu::select('id' , 'title' , 'slug' , 'submenu' , 'priority')->whereStatus(4)->orderBy('priority')->get();
        $books              = Book::whereStatus(4)->get();
        $submenus           = Submenu::select('title' , 'slug' , 'menu_id')->whereStatus(4)->get();
        $slides             = Slide::select('title' , 'file_link')->whereStatus(4)->get();
        $logos              = Logo::select('title' , 'file_link')->first();

        return view('Site.books')
            ->with(compact('menus'))
            ->with(compact('logos'))
            ->with(compact('slides'))
            ->with(compact('books'))
            ->with(compact('submenus'));
    }

    public function bookdetail($slug){
        $menus              = Menu::select('id' , 'title' , 'slug' , 'submenu' , 'priority')->whereStatus(4)->orderBy('priority')->get();
        $books              = Book::whereSlug($slug)->get();
        $submenus           = Submenu::select('title' , 'slug' , 'menu_id')->whereStatus(4)->get();
        $slides             = Slide::select('title' , 'file_link')->whereStatus(4)->get();
        $logos              = Logo::select('title' , 'file_link')->first();

        return view('Site.books')
            ->with(compact('menus'))
            ->with(compact('logos'))
            ->with(compact('slides'))
            ->with(compact('books'))
            ->with(compact('submenus'));
    }

    public function terms(){
        $menus              = Menu::select('id' , 'title' , 'slug' , 'submenu' , 'priority')->whereStatus(4)->orderBy('priority')->get();
        $submenus           = Submenu::select('title' , 'slug' , 'menu_id')->whereStatus(4)->get();
        $slides             = Slide::select('title' , 'file_link')->whereStatus(4)->get();
        $logos              = Logo::select('title' , 'file_link')->first();

        return view('Site.terms')
            ->with(compact('menus'))
            ->with(compact('logos'))
            ->with(compact('slides'))
            ->with(compact('submenus'));
    }

    public function bio(){
        $menus              = Menu::select('id' , 'title' , 'slug' , 'submenu' , 'priority')->whereStatus(4)->orderBy('priority')->get();
        $submenus           = Submenu::select('title' , 'slug' , 'menu_id')->whereStatus(4)->get();
        $logos              = Logo::select('title' , 'file_link')->first();

        return view('Site.bio')
            ->with(compact('menus'))
            ->with(compact('logos'))
            ->with(compact('submenus'));
    }

    public function faq(){
        return view('Site.faq');
    }

    public function lessondetails(){
        return view('Site.lessondetails');
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
}
