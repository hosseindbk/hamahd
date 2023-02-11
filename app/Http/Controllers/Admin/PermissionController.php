<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu_panel;
use App\Models\Permission;
use App\Models\Submenu_panel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{

    public function index()
    {
        $permissions    = Permission::latest()->paginate(25);
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();
        return view('Admin.permissions.all')
            ->with(compact(['menupanels' , 'submenupanels', 'permissions']));

    }


    public function create()
    {
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();
        return view('Admin.permissions.create')
            ->with(compact(['menupanels' , 'submenupanels']));

    }


    public function store(Request $request, Permission $permission)
    {

        $permission = new Permission();
        $permission->title = $request->input('title');
        $permission->slug = $request->input('slug');
        $permission->user_id = Auth::user()->id;
        $result = $permission->save();
        if ($result == true) {
            alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        }
        else {
            alert()->error('عملیات ناموفق', 'اطلاعات ثبت نشد، لطفا مجددا تلاش نمایید');
        }
        return response()->json(['data'=>'success' , 'status' => 'good']);
//        return redirect(route('permissions.index'));
    }

    public function edit($id)
    {
        $permissions = Permission::whereId($id)->get();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();
        return view('Admin.permissions.edit')
            ->with(compact(['menupanels' , 'submenupanels', 'permissions']));

    }

    public function update(Request $request, Permission $permission)
    {
        $permission->title = $request->input('title');
        $permission->slug = $request->input('slug');
        $permission->user_id = Auth::user()->id;
        $result = $permission->update();
        if ($result == true) {
            alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        }
        else {
            alert()->error('عملیات ناموفق', 'اطلاعات ثبت نشد، لطفا مجددا تلاش نمایید');
        }         return redirect(route('permissions.index'));
    }

    public function destroy(Permission $permission)
    {
        $result = $permission->delete();
        if ($result == true) {
            alert()->success('عملیات موفق', 'اطلاعات با موفقیت پاک شد');
        }
        else {
            alert()->error('عملیات ناموفق', 'اطلاعات پاک نشد، لطفا مجددا تلاش نمایید');
        }
        return back();
    }
}
