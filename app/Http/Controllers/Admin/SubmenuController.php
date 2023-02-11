<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Submenu;
use App\Models\Menu_panel;
use App\Models\Submenu_panel;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{

    public function index()
    {
        $submenus        = Submenu::all();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        return view('Admin.submenus.all')
            ->with(compact(['menupanels' , 'submenupanels', 'submenus']));
    }


    public function create()
    {

        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        return view('Admin.submenus.create')
            ->with(compact(['menupanels' , 'submenupanels']));

    }


    public function store(Request $request )
    {
        $submenus = new Submenu();

        $submenus->title       = $request->input('title');
        $submenus->slug        = $request->input('slug');
        $submenus->namayesh    = $request->input('namayesh');
        $submenus->menu_id     = $request->input('menu_id');
        $submenus->user_id     = auth()->user()->id;

        $result = $submenus->save();
        if ($result == true) {
            alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        }
        else {
            alert()->error('عملیات ناموفق', 'اطلاعات ثبت نشد، لطفا مجددا تلاش نمایید');
        }
        return redirect(route('submenus.index'));
    }

    public function edit($id)
    {
        $submenus           = Submenu::whereId($id)->get();
        $menupanels         = Menu_panel::whereStatus(4)->get();
        $submenupanels      = Submenu_panel::whereStatus(4)->get();
        return view('Admin.submenus.edit')
            ->with(compact(['menupanels' , 'submenupanels', 'submenus']));

    }

    public function update(Request $request , $id)
    {
        $submenupanel = Submenu::findOrfail($id);
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
        }
        return redirect(route('submenus.index'));
    }

    public function destroy(Submenu $submenu)
    {
        $result = $submenu->delete();
        if ($result == true) {
            alert()->success('عملیات موفق', 'اطلاعات با موفقیت پاک شد');
        }
        else {
            alert()->error('عملیات ناموفق', 'اطلاعات پاک نشد، لطفا مجددا تلاش نمایید');
        }        return redirect(route('submenus.index'));
    }
}
