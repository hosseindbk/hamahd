<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu_panel;
use App\Models\Menu;
use App\Models\Submenu_panel;
use Illuminate\Support\Facades\Auth;


class MenuController extends Controller
{
    public function index()
    {
        $menus          = Menu::all();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();


        return view('Admin.menus.all')
            ->with(compact(['menupanels' , 'submenupanels', 'menus']));
    }

    public function create()
    {
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();


        return view('Admin.menus.create')
            ->with(compact(['menupanels' , 'submenupanels']));
    }

    public function store(Request $request)
    {
        $menu = new Menu();

        $menu->title        = $request->input('title');
        $menu->submenu      = $request->input('submenu');
        $menu->status       = 4;
        $menu->user_id      = Auth::user()->id;

        $result = $menu->save();
        if ($result == true) {
            alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        }
        else {
            alert()->error('عملیات ناموفق', 'اطلاعات ثبت نشد، لطفا مجددا تلاش نمایید');
        }
        return redirect(route('menus.index'));

    }

    public function edit($id)
    {
        $menus              = Menu::whereId($id)->get();
        $menupanels         = Menu_panel::whereStatus(4)->get();
        $submenupanels      = Submenu_panel::whereStatus(4)->get();
        return view('Admin.menus.edit')
            ->with(compact(['menupanels' , 'submenupanels', 'menus']));

    }

    public function update(Request $request , $id)
    {
        $menu = Menu::findOrfail($id);
        $menu->title        = $request->input('title');
        $menu->submenu      = $request->input('submenu');

        if($request->input('status') == 'on'){
            $menu->status = 4;
        }

        if($request->input('status') == null) {
            $menu->status = 0;
        }

        $result = $menu->update();
        if ($result == true) {
            alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        }
        else {
            alert()->error('عملیات ناموفق', 'اطلاعات ثبت نشد، لطفا مجددا تلاش نمایید');
        }
        return redirect(route('menus.index'));
    }
    public function destroy(Request $request , $id)
    {
        $menu = Menu::findOrfail($id);
        $result = $menu->delete();
        if ($result == true) {
            alert()->success('عملیات موفق', 'اطلاعات با موفقیت پاک شد');
        }
        else {
            alert()->error('عملیات ناموفق', 'اطلاعات پاک نشد، لطفا مجددا تلاش نمایید');
        }
        return redirect(route('menus.index'));
    }

}
