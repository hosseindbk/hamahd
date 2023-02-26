<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\userrequest;
use App\Models\Menu_panel;
use App\Models\Submenu_panel;
use App\Models\User;
use App\Models\Usertype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {

        //$this->authorize('user-manage');
        $users          = User::latest()->paginate(10);
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        if ($request->ajax()) {
            $data = User::select('id' , 'name', 'username', 'email' , 'phone' , 'status')->get();

            return Datatables::of($data)
                ->editColumn('name', function ($data) {
                    return ($data->name);
                })
                ->editColumn('username', function ($data) {
                    return ($data->username);
                })
                ->editColumn('email', function ($data) {
                    return ($data->email);
                })
                ->editColumn('phone', function ($data) {
                    return ($data->phone);
                })
                ->editColumn('status', function ($data) {
                    if ($data->status == "0") {
                        return "عدم نمایش";
                    } elseif ($data->status == "4") {
                        return "در حال نمایش";
                    }
                })
                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('users.edit', $data->id) . '" class="btn ripple btn-outline-info btn-icon" style="float: right;margin: 0 5px;"><i class="fe fe-edit-2"></i></a>
                    <button type="button" id="submit" data-toggle="modal" data-target="#myModal'.$data->id.'" class="btn ripple btn-outline-danger btn-icon " style="float: right;"><i class="fe fe-trash-2 "></i></button>';

                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('Admin.users.all')
            ->with(compact(['menupanels' , 'submenupanels', 'users' ]));
    }
    public function create()
    {
        $menupanels         = Menu_panel::whereStatus(4)->get();
        $submenupanels      = Submenu_panel::whereStatus(4)->get();
        $types              = Usertype::all();

        return view('Admin.users.create')
            ->with(compact(['menupanels' , 'submenupanels', 'types']));

    }

    public function store(Request $request)
    {


        try{
            $users = new user();

            $users->name        = $request->input('name');
            $users->username    = $request->input('username');
            $users->email       = $request->input('email');
            $users->type_id     = $request->input('type');
            $users->phone       = $request->input('mobile');
            $users->status      = 1;
            if ($request->input('type') == 1) {
                $users->level = 'admin';
            }
            $users->password    = Hash::make($request->input('password'));
            $result             = $users->save();

        if ($result == true) {
            $success = true;
            $flag    = 'success';
            $subject = 'عملیات موفق';
            $message = 'اطلاعات با موفقیت ثبت شد';
        }
        else {
            $success = false;
            $flag    = 'error';
            $subject = 'عملیات نا موفق';
            $message = 'اطلاعات ثبت نشد، لطفا مجددا تلاش نمایید';
        }

    } catch (\Exception $e) {

        $success = false;
        $flag    = 'error';
        $subject = 'خطا در ارتباط با سرور';
            //$message = strchr($e);
        $message = 'اطلاعات ثبت نشد،لطفا بعدا مجدد تلاش نمایید ';
        }

        return response()->json(['success'=>$success , 'subject' => $subject, 'flag' => $flag, 'message' => $message]);

    }


    public function edit($id)
    {
        $users          = User::whereId($id)->get();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();
        $types          = Usertype::all();


        return view('Admin.users.edit')
            ->with(compact(['menupanels' , 'submenupanels', 'users' , 'types']));

    }



    public function update(Request $request , $id)
    {
        try{
            $users = User::findOrfail($id);
            $users->name         = $request->input('name');
            $users->username     = $request->input('username');
            $users->email        = $request->input('email');
            $users->type_id         = $request->input('type');
            $users->phone        = $request->input('mobile');
            if ($request->input('password') != null) {
                $users->password = Hash::make($request->input('password'));
            }
            $result = $users->update();
            if ($result == true) {
                $success = true;
                $flag    = 'success';
                $subject = 'عملیات موفق';
                $message = 'اطلاعات با موفقیت ثبت شد';
            }else{
                $success = false;
                $flag    = 'error';
                $subject = 'عملیات ناموفق';
                $message = 'اطلاعات ثبت نشد، لطفا مجددا تلاش نمایید';
            }

        } catch (\Exception $e) {

            $success = false;
            $flag    = 'error';
            $subject = 'خطا در ارتباط با سرور';
            //$message = strchr($e);
            $message = 'اطلاعات ثبت نشد،لطفا بعدا مجدد تلاش نمایید ';
        }

        return response()->json(['success'=>$success , 'subject' => $subject, 'flag' => $flag, 'message' => $message]);
    }



    public function deleteuser(Request $request)
    {
        try{
            $user = User::findorfail($request->input('id'));
            $result = $user->delete();
            if ($result == true) {
                $success = true;
                $flag    = 'success';
                $subject = 'عملیات موفق';
                $message = 'اطلاعات با موفقیت پاک شد';
            }else{
                $success = false;
                $flag    = 'error';
                $subject = 'عملیات ناموفق';
                $message = 'اطلاعات پاک نشد، لطفا مجددا تلاش نمایید';
            }

        } catch (\Exception $e) {

            $success = false;
            $flag    = 'error';
            $subject = 'خطا در ارتباط با سرور';
            $message = 'اطلاعات پاک نشد،لطفا بعدا مجدد تلاش نمایید ';
        }
        return response()->json(['success'=>$success , 'subject' => $subject, 'flag' => $flag, 'message' => $message]);
    }
}
