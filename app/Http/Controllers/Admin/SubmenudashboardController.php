<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\submenudashboardrequest;
use App\Models\Menu_panel;
use App\Models\Submenu_panel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SubmenudashboardController extends Controller
{

    public function index(Request $request)
    {
        $submenudashs   = Submenu_panel::all();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        if ($request->ajax()) {
            $data = Submenu_panel::select('id', 'title', 'slug', 'status')
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
                ->editColumn('menu_id', function ($data) {
                    return ($data->menu_id);
                })
                ->editColumn('status', function ($data) {
                    if ($data->status == "0") {
                        return "عدم نمایش";
                    } elseif ($data->status == "4") {
                        return "در حال نمایش";
                    }
                })
                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('submenudashboards.edit', $data->id) . '" class="btn ripple btn-outline-info btn-icon" style="float: right;margin: 0 5px;"><i class="fe fe-edit-2"></i></a>
                    <button type="button" id="submit" data-toggle="modal" data-target="#myModal'.$data->id.'" class="btn ripple btn-outline-danger btn-icon " style="float: right;"><i class="fe fe-trash-2 "></i></button>';

                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

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
        try {
        $submenupanels = new Submenu_panel();

        $submenupanels->title       = $request->input('title');
        $submenupanels->slug        = $request->input('slug');
        $submenupanels->namayesh    = $request->input('slug');
        $submenupanels->menu_id     = $request->input('menu_id');
        $submenupanels->user_id     = auth()->user()->id;

        $result = $submenupanels->save();
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
        try{
        $submenupanel = Submenu_panel::findOrfail($id);
        $submenupanel->title        = $request->input('title');
        $submenupanel->slug         = $request->input('slug');
        $submenupanel->namayesh     = $request->input('namayesh');
        $submenupanel->status       = $request->input('status');


        $result = $submenupanel->update();
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

    public function deletesubmenudashboards(Request $request)
    {
        try {
            $menudashboard = Submenu_panel::findOrfail($request->input('id'));
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
