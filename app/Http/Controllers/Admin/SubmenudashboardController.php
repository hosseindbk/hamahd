<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\submenudashboardrequest;
use App\Models\Menu_panel;
use App\Models\Submenu_panel;
use Illuminate\Http\Request;

class SubmenudashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submenudashs   = Submenu_panel::all();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        return view('Admin.submenudashboards.all')
            ->with(compact(['menupanels' , 'submenupanels', 'submenudashs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();

        return view('Admin.submenudashboards.create')
            ->with(compact(['menupanels' , 'submenupanels']));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $submenupanels = new Submenu_panel();

        $submenupanels->title       = $request->input('title');
        $submenupanels->slug        = $request->input('slug');
        $submenupanels->namayesh    = $request->input('namayesh');
        $submenupanels->menu_id     = $request->input('menu_id');
        $submenupanels->user_id     = auth()->user()->id;

        $submenupanels->save();
/*        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');*/
        return redirect(route('submenudashboards.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $submenus           = Submenu_panel::whereId($id)->get();
        $menupanels         = Menu_panel::whereStatus(4)->get();
        $submenupanels      = Submenu_panel::whereStatus(4)->get();
        return view('Admin.submenudashboards.edit')
            ->with(compact(['menupanels' , 'submenupanels', 'submenus']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $submenupanel = Submenu_panel::findOrfail($id);
        $submenupanel->title        = $request->input('title');
        $submenupanel->slug         = $request->input('slug');
        $submenupanel->namayesh     = $request->input('namayesh');

        if($request->input('status') == 'on'){
            $submenupanel->status = 4;
        }

        if($request->input('status') == null) {
            $submenupanel->status = 0;
        }

        $submenupanel->update();
//        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return redirect(route('submenudashboards.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submenudashboard $submenudashboard)
    {
        $submenudashboard->delete();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت پاک شد');
        return redirect(route('submenudashboards.index'));
    }
}
