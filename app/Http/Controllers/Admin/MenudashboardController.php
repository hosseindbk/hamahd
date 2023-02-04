<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu_panel;
use App\Models\Submenu_panel;
use Illuminate\Http\Request;

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

        $menudashboard->save();

        return redirect(route('menudashboards.index'));

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
        $submenudashboard = Submenu_panel::findOrfaild($id);
        $submenudashboard->title        = $request->input('title');
        $submenudashboard->slug         = $request->input('slug');
        $submenudashboard->icon         = $request->input('icon');
        $submenudashboard->submenu      = $request->input('submenu');

        if($request->input('status') == 'on'){
            $submenudashboard->status = 1;
        }

        if($request->input('status') == null) {
            $submenudashboard->status = 0;
        }

        $submenudashboard->update();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return redirect(route('menudashboards.index'));
    }

}
