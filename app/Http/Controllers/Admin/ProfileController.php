<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\profilerequest;
use App\Models\Menu_panel;
use App\Models\Role;
use App\Models\Submenu_panel;
use App\Models\User;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $users          = User::all();
        $roles          = Role::where('id' , '>' , 9)->get();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();
        return view('Admin.profile.all')
            ->with(compact(['menupanels' , 'submenupanels', 'roles' , 'users']));

    }
        public function update(profilerequest $request , User $user)
        {
            $user->name = $request->input('name');
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->mobile = $request->input('mobile');
            $user->whatsapp = $request->input('whatsapp');
            $user->instagram = $request->input('instagram');
            $user->telegram = $request->input('telegram');

            $user->update();

            alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
            return redirect(route('profile.index'));
        }
}
