<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu_panel;
use App\Models\Gallerypic;
use App\Models\Submenu_panel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class GallerypicController extends Controller
{

    public function index(Request $request)
    {
        $menus          = Gallerypic::all();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        if ($request->ajax()) {
            $data = Gallerypic::select('id', 'title', 'slug' , 'file_link', 'status')->get();

            return Datatables::of($data)
                ->editColumn('title', function ($data) {
                    return ($data->title);
                })
                ->editColumn('slug', function ($data) {
                    return ($data->slug);
                })
                ->editColumn('file_link', function ($data) {
                    return ($data->file_link);
                })
                ->editColumn('status', function ($data) {
                    if ($data->status == "0") {
                        return "عدم نمایش";
                    } elseif ($data->status == "4") {
                        return "در حال نمایش";
                    }
                })
                ->editColumn('submenu', function ($data) {
                    if ($data->submenu == 1) {
                        return "دارد";
                    } else {
                        return "ندارد";
                    }
                })
                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('menus.edit', $data->id) . '" class="btn ripple btn-outline-info btn-icon" style="float: right;margin: 0 5px;"><i class="fe fe-edit-2"></i></a>
                    <button type="button" id="submit" data-toggle="modal" data-target="#myModal'.$data->id.'" class="btn ripple btn-outline-danger btn-icon " style="float: right;"><i class="fe fe-trash-2 "></i></button>';

                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('Admin.gallerypics.all')
            ->with(compact(['menupanels' , 'submenupanels', 'menus']));


    }


    public function create()
    {
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();


        return view('Admin.gallerypics.create')
            ->with(compact(['menupanels' , 'submenupanels']));
    }


    public function store(Request $request)
    {
        $slides = new Slide();
        $slides->title      = $request->input('title');
        $slides->status     = 1;
        $slides->user_id    = Auth::user()->id;

        if ($request->file('file_link')) {

            $file = $request->file('file_link');
            $img = Image::make($file);
            $imagePath ="images/slides";
            $imageName = md5(uniqid(rand(), true)) .'.'. $file->clientExtension();
            $slides->file_link = $file->storeAs($imagePath, $imageName);
            $img->save($imagePath.$imageName);
            $img->encode('jpg');

        }

        $result = $slides->save();
        try{

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


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
