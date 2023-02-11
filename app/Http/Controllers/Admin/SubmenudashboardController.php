<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\submenudashboardrequest;
use App\Models\Menu_panel;
use App\Models\Submenu_panel;
use Illuminate\Http\Request;

class SubmenudashboardController extends Controller
{

    public function index()
    {
        $submenudashs   = Submenu_panel::all();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        return view('Admin.submenudashboards.all')
            ->with(compact(['menupanels' , 'submenupanels', 'submenudashs']));
    }

    public function create()
    {

        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        return view('Admin.submenudashboards.create')
            ->with(compact(['menupanels' , 'submenupanels']));

    }

    public function store(Request $request )
    {

        $submenupanels = new Submenu_panel();

        $submenupanels->title       = $request->input('title');
        $submenupanels->slug        = $request->input('slug');
        $submenupanels->namayesh    = $request->input('namayesh');
        $submenupanels->menu_id     = $request->input('menu_id');
        $submenupanels->user_id     = auth()->user()->id;

        $result = $submenupanels->save();
                if ($result == true) {
            alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        }
        else {
            alert()->error('عملیات ناموفق', 'اطلاعات ثبت نشد، لطفا مجددا تلاش نمایید');
        }
        return response()->json(['data'=>'success' , 'status' => 'good']);


//        return redirect(route('submenudashboards.index'));
    }

    public function edit($id)
    {
        $submenus           = Submenu_panel::whereId($id)->get();
        $menupanels         = Menu_panel::whereStatus(4)->get();
        $submenupanels      = Submenu_panel::whereStatus(4)->get();
        return view('Admin.submenudashboards.edit')
            ->with(compact(['menupanels' , 'submenupanels', 'submenus']));

    }

    public function update(Request $request , $id)
    {
        $submenupanel = Submenu_panel::findOrfail($id);
        $submenupanel->title        = $request->input('title');
        $submenupanel->slug         = $request->input('slug');
        $submenupanel->namayesh     = $request->input('namayesh');

        if($request->input('status') == 'on'){
            $submenupanel->status = 4;
        }

        if($request->input('status') == null) {
            $submenupanel->status = 0;
        }

        $result = $submenupanel->update();
        if ($result == true) {
            alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        }
        else {
            alert()->error('عملیات ناموفق', 'اطلاعات ثبت نشد، لطفا مجددا تلاش نمایید');
        }        return redirect(route('submenudashboards.index'));
    }

    public function destroy(Submenudashboard $submenudashboard)
    {
        $result = $submenudashboard->delete();
        if ($result == true) {
            alert()->success('عملیات موفق', 'اطلاعات با موفقیت پاک شد');
        }
        else {
            alert()->error('عملیات ناموفق', 'اطلاعات پاک نشد، لطفا مجددا تلاش نمایید');
        }        return redirect(route('submenudashboards.index'));
    }
}
