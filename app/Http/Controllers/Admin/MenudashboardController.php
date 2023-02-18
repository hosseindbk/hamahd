<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu_panel;
use App\Models\Submenu_panel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class MenudashboardController extends Controller
{

    public function index(Request $request)
    {
        $menudashs      = Menu_panel::all();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        if ($request->ajax()) {
            $data = Menu_panel::select('id', 'title', 'slug', 'status')
                ->get();

            return Datatables::of($data)
                ->editColumn('id', function ($data) {
                    return ($data->id);
                })
                ->editColumn('title', function ($data) {
                    return ($data->title);
                })
                ->editColumn('slug', function ($data) {
                    return ($data->slug);
                })
                ->editColumn('status', function ($data) {
                    if ($data->status == "0") {
                        return "عدم نمایش";
                    } elseif ($data->status == "4") {
                        return "در حال نمایش";
                    }
                })
                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('menudashboards.edit', $data->id) . '" class="btn ripple btn-outline-info btn-icon" style="float: right;margin: 0 5px;"><i class="fe fe-edit-2"></i></a>
                    <button type="button" id="submit" data-toggle="modal" data-target="#myModal'.$data->id.'" class="btn ripple btn-outline-danger btn-icon " style="float: right;"><i class="fe fe-trash-2 "></i></button>';

                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

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
        try {
       $menudashboard = new Menu_panel();

        $menudashboard->title        = $request->input('title');
        $menudashboard->slug         = $request->input('slug');
        $menudashboard->icon         = $request->input('icon');
        $menudashboard->submenu      = $request->input('submenu');
        $menudashboard->user_id      = Auth::user()->id;
        $menudashboard->status       = 4;

        $result = $menudashboard->save();
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
        try {

            $menudashboard = menu_panel::findOrfail($id);
            $menudashboard->title        = $request->input('title');
            $menudashboard->slug         = $request->input('slug');
            $menudashboard->icon         = $request->input('icon');
            $menudashboard->status       = $request->input('status');

            $result = $menudashboard->update();

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
        //return redirect(route('menudashboards.index'));
    }

    public function deletemenudashboards(Request $request)
    {
        try {
            $menudashboard = Menu_panel::findOrfail($request->input('id'));
            $result = $menudashboard->delete();

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
