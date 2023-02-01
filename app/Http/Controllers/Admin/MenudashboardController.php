<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu_panel;
use App\Models\Submenu_panel;
use Illuminate\Http\Request;

class MenudashboardController extends Controller
{

    public function index()
    {
        $menudashs      = Menu_panel::all();
        $menupanels     = Menu_panel::whereStatus(4)->get();
        $submenupanels  = Submenu_panel::whereStatus(4)->get();


        return view('Admin.menudashboards.all')
            ->with(compact('menupanels'))
            ->with(compact('submenupanels'))
            ->with(compact('menudashs'));
    }

}
