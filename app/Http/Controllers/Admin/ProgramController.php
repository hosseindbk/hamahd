<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Menu_panel;
use App\Models\Submenu_panel;
use App\Models\Program;

class ProgramController extends Controller
{

    public function index(Request $request)
    {
        $menus          = Program::all();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        if ($request->ajax()) {
            $data = Program::select('id', 'title', 'slug' , 'file_link', 'status')->get();

            return Datatables::of($data)
                ->editColumn('title', function ($data) {
                    return ($data->title);
                })
                ->editColumn('slug', function ($data) {
                    return ($data->slug);
                })
                ->addColumn('file_link', function ($row) {
                    return '<img src="'.asset($row->file_link).'"  width="200" class="img-rounded" align="center" />';

                })
                ->editColumn('status', function ($data) {
                    if ($data->status == "0") {
                        return "عدم نمایش";
                    } elseif ($data->status == "4") {
                        return "در حال نمایش";
                    }
                })

                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('programs.edit', $data->id) . '" class="btn ripple btn-outline-info btn-icon" style="float: right;margin: 0 5px;"><i class="fe fe-edit-2"></i></a>
                    <button type="button" id="submit" data-toggle="modal" data-target="#myModal'.$data->id.'" class="btn ripple btn-outline-danger btn-icon " style="float: right;"><i class="fe fe-trash-2 "></i></button>';

                    return $actionBtn;
                })
                ->rawColumns(['action', 'file_link'])
                ->make(true);
        }

        return view('Admin.programs.all')
            ->with(compact(['menupanels' , 'submenupanels', 'menus']));


    }


    public function create()
    {
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();


        return view('Admin.programs.create')
            ->with(compact(['menupanels' , 'submenupanels']));
    }


    public function store(Request $request)
    {
        $programs = new Program();
        $programs->title      = $request->input('title');
        $programs->status     = 4;
        $programs->user_id    = Auth::user()->id;

        if ($request->file('file_link')) {

            $file = $request->file('file_link');
            $img = Image::make($file);
            $imagePath ="images/programs/";
            $imageName = md5(uniqid(rand(), true)) .'.'. $file->clientExtension();
            $programs->file_link = $file->storeAs($imagePath, $imageName);
            $img->save($imagePath.$imageName);
            $img->encode('jpg');

        }

        $result = $programs->save();
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
