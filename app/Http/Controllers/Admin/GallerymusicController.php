<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu_panel;
use App\Models\Gallerymusic;
use App\Models\Submenu_panel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class GallerymusicController extends Controller
{

    public function index(Request $request)
    {
        $menus          = Gallerymusic::all();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        if ($request->ajax()) {
            $data = Gallerymusic::select('id', 'title', 'slug' , 'file_link', 'status')->get();

            return Datatables::of($data)
                ->editColumn('title', function ($data) {
                    return ($data->title);
                })
                ->addColumn('cover', function ($row) {
                    return '<img src="'.asset($row->cover).'"  width="200" class="img-rounded" align="center" />';

                })
                ->editColumn('slug', function ($data) {
                    return ($data->slug);
                })
                ->addColumn('file_link', function ($data) {
                    return  '<audio controls> <source src="'. asset($data->file_link) .'" type="audio/mpeg"> </audio>';
                })
                ->editColumn('status', function ($data) {
                    if ($data->status == "0") {
                        return "عدم نمایش";
                    } elseif ($data->status == "4") {
                        return "در حال نمایش";
                    }
                })

                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('menus.edit', $data->id) . '" class="btn ripple btn-outline-info btn-icon" style="float: right;margin: 0 5px;"><i class="fe fe-edit-2"></i></a>
                    <button type="button" id="submit" data-toggle="modal" data-target="#myModal'.$data->id.'" class="btn ripple btn-outline-danger btn-icon " style="float: right;"><i class="fe fe-trash-2 "></i></button>';

                    return $actionBtn;
                })
                ->rawColumns(['action', 'file_link' , 'cover'])
                ->make(true);
        }

        return view('Admin.gallerymusices.all')
            ->with(compact(['menupanels' , 'submenupanels', 'menus']));


    }


    public function create()
    {
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();


        return view('Admin.gallerymusices.create')
            ->with(compact(['menupanels' , 'submenupanels']));
    }


    public function store(Request $request)
    {
        $gallerymusices = new Gallerymusic();
        $gallerymusices->title      = $request->input('title');
        $gallerymusices->status     = 1;
        $gallerymusices->user_id    = Auth::user()->id;

        if ($request->hasFile('file_link')) {

            $file           = $request->file('file_link');
            $imagePath      ="musices/";
            $imageName      = md5(uniqid(rand(), true)) .'.'. $file->clientExtension();
            $gallerymusices->file_link = $file->storeAs($imagePath, $imageName);
            $file->move($imagePath, $imageName);
            //$gallerymusices->save($imagePath.$imageName);

        }
        if ($request->hasFile('cover')) {

            $cover = $request->file('cover');
            $img = Image::make($cover);
            $imagePath ="musices/pic/";
            $imageName = md5(uniqid(rand(), true)) .'.'. $cover->clientExtension();
            $gallerymusices->cover = $cover->storeAs($imagePath, $imageName);
            $img->save($imagePath.$imageName);
            $img->encode('jpg');

        }

        $result = $gallerymusices->save();
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
