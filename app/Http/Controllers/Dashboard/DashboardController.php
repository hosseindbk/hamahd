<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Models\Menu_panel;

class DashboardController extends Controller
{
    public function index(){

        $manupanels = Menu_panel::all();
        return view('Dashboard.panel')->with(compact('manupanels'));
    }
//    public function bookmark(){
//        return view('Dashboard.bookmark');
//    }
//    public function courses(){
//        return view('Dashboard.courses');
//    }
//    public function earnings(){
//        return view('Dashboard.earnings');
//    }
//    public function enrolled(){
//        return view('Dashboard.enrolled');
//    }
//    public function message(){
//        return view('Dashboard.message');
//    }
//    public function profile(){
//
//        $users = User::select('name' , 'username' , 'email' , 'image' , 'phone' , 'created_at')->get();
//
//
//        return view('Dashboard.profile')->with(compact('users'));
//    }
//    public function purchase(){
//        return view('Dashboard.purchase');
//    }
//    public function quiz(){
//        return view('Dashboard.quiz');
//    }
//    public function reviews(){
//        return view('Dashboard.reviews');
//    }
//    public function settings(){
//        return view('Dashboard.settings');
//    }
//    public function submitcourse(){
//        return view('Dashboard.submitcourse');
//    }
//    public function withdraw(){
//        return view('Dashboard.withdraw');
//    }
}
