<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\userrequest;
use App\Models\Menu_panel;
use App\Models\Submenu_panel;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        //$this->authorize('user-manage');
        $users          = User::latest()->paginate(10);
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        return view('Admin.users.all')
            ->with(compact(['menupanels' , 'submenupanels', 'users']));
    }
    public function create()
    {
        $menupanels         = Menu_panel::whereStatus(4)->get();
        $submenupanels      = Submenu_panel::whereStatus(4)->get();

        return view('Admin.users.create')
            ->with(compact(['menupanels' , 'submenupanels']));

    }

    public function store(userrequest $request)
    {
        $users = new user();

        $users->name = $request->input('name');
        $users->username = $request->input('username');
        $users->email = $request->input('email');
        $users->level = 'admin';
        $users->password = Hash::make($request->input('password'));
        $users->save();

        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return redirect(route('levelAdmins.index'));

    }


    public function edit($id)
    {
        $users          = User::whereId($id)->get();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        return view('Admin.users.edit')
            ->with(compact(['menupanels' , 'submenupanels', 'users']));

    }



    public function update(userrequest $request , User $user)
    {
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->update();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return redirect(route('users.index'));
    }



    public function destroy(User $user)
    {
        $user->delete();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت پاک شد');
        return back();
    }
}
