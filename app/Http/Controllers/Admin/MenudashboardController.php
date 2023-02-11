<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu_panel;
use App\Models\Submenu_panel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenudashboardController extends Controller
{

    public function index()
    {
        $menudashs      = Menu_panel::all();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();


        return view('Admin.menudashboards.all')
            ->with(compact(['menupanels' , 'submenupanels', 'menudashs']));
    }

    public function create()
    {
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();


        return view('Admin.menudashboards.create')
            ->with(compact(['menupanels' , 'submenupanels']));
    }

    public function store(Request $request)
    {
       $menudashboard = new Menu_panel();

        $menudashboard->title        = $request->input('title');
        $menudashboard->slug         = $request->input('slug');
        $menudashboard->icon         = $request->input('icon');
        $menudashboard->submenu      = $request->input('submenu');
        $menudashboard->user_id      = Auth::user()->id;
        $menudashboard->status       = 4;

        $result = $menudashboard->save();
        if ($result == true) {
            alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        }
        else {
            alert()->error('عملیات ناموفق', 'اطلاعات ثبت نشد، لطفا مجددا تلاش نمایید');
        }
        return response()->json(['data'=>'success' , 'status' => 'good']);

//        return redirect(route('menudashboards.index'));

    }

    public function edit($id)
    {
        $menus              = Menu_panel::whereId($id)->get();
        $menupanels         = Menu_panel::whereStatus(4)->get();
        $submenupanels      = Submenu_panel::whereStatus(4)->get();
        return view('Admin.menudashboards.edit')
            ->with(compact(['menupanels' , 'submenupanels', 'menus']));

    }

    public function update(Request $request , $id)
    {
        $menudashboard = menu_panel::findOrfail($id);
        $menudashboard->title        = $request->input('title');
        $menudashboard->slug         = $request->input('slug');
        $menudashboard->icon         = $request->input('icon');
        $menudashboard->status       = $request->input('status');

        if($request->input('status') == 'on'){
            $menudashboard->status = 4;
        }

        if($request->input('status') == null) {
            $menudashboard->status = 0;
        }

        $result = $menudashboard->update();

        if ($result == true) {
            alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        }
        else {
            alert()->error('عملیات ناموفق', 'اطلاعات ثبت نشد، لطفا مجددا تلاش نمایید');
        }
//        return response()->json(['data'=>'success' , 'status' => 'good']);

//        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return redirect(route('menudashboards.index'));
    }

}
