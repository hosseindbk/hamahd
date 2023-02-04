<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu_panel;
use App\Models\Role;
use App\Models\Submenu_panel;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LevelManageController extends Controller
{
    public function index()
    {
        $roles          = Role::latest()->with('users')->paginate(20);
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        return view('Admin.levelAdmins.all')
            ->with(compact(['menupanels' , 'submenupanels', 'roles']));
    }

    public function create()
    {
        $menupanels = Menu_panel::whereStatus(4)->get();
        $submenupanels = Submenu_panel::whereStatus(4)->get();
        return view('Admin.levelAdmins.create')
            ->with(compact(['menupanels' , 'submenupanels']));
    }

    public function store(Request $request)
    {
        $this->validate($request , [
            'user_id' => 'required',
            'role_id' => 'required'
        ]);

        User::find($request->input('user_id'))->roles()->sync($request->input('role_id'));
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return redirect(route('levelAdmins.index'));

    }

    public function edit($id)
    {
        $user           = User::whereId($id)->get();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        return view('Admin.levelAdmins.edit')
            ->with(compact(['menupanels' , 'submenupanels', 'user']));

    }

    public function update(Request $request , User $user)
    {
        $user->roles->sync($request->input('role_id'));
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return redirect(route('level.index'));
    }

    public function destroy(User $user)
    {
        $user->roles()->detach();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت پاک شد');
        return redirect(route('level.index'));
    }
}
