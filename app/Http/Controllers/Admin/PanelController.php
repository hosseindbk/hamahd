<?php

namespace App\Http\Controllers\Admin;

use App\Models\comment;
use App\Models\commentrate;
use App\Models\Menupanel;
use App\Models\submenupanel;
use App\Models\User;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PanelController extends Controller
{

    public function index()
    {
        $countusers         = User::count();
        $users              = User::leftjoin('usertypes' , 'usertypes.id' , '=' , 'users.type_id')
            ->select('users.id','users.name', 'users.type_id','users.phone' , 'users.created_at' , 'usertypes.title as type_title',
                DB::raw( '(CASE
            WHEN users.status = "0" THEN "غیر فعال"
            WHEN users.status = "1" THEN "ثبت نام اولیه"
            WHEN users.status = "2" THEN "تایید مدیر"
            END) AS status'))
            ->orderBy('id' , 'DESC')
            ->get();
        $menupanels         = Menupanel::whereStatus(4)->get();
        $submenupanels      = Submenupanel::whereStatus(4)->get();
        $comments           = comment::whereApproved(0)->latest()->get();
        $commentrates       = commentrate::whereApproved(0)->latest()->get();

        $day = jdate()->getDay();
        $month = jdate()->getMonth();

        $dayvisitos  = Visitor::selectRaw('substring(datetime , 6,2 ) month , substring(datetime , 9,2 ) day, count(ip) publish')
            ->groupBy('day' , 'month')
            ->having('day' , '=', $day)
            ->having('month' , '=', $month)
            ->pluck('publish')->first();

        $monthvisits = Visitor::selectRaw('substring(datetime , 6,2 ) month , count(*) publish')
            ->groupBy('month')
            ->having('month' , '=', $month)
            ->pluck('publish')->first();

        $month = 12;

        $visitos = Visitor::selectRaw('substring(datetime , 6,2 ) month , count(*) publish')
            ->groupBy('month')
            ->pluck('publish');
        $visitors = $this->CheckCount($visitos , $month);

        $pievisitors = Visitor::selectRaw('page_id , count(*) publish')
            ->groupBy('page_id')
            ->pluck('publish');

        $lables = $this->getLastMonths($month);

        return view('Admin.panel.index')

            ->with(compact('menupanels'))
            ->with(compact('submenupanels'))
            ->with(compact('commentrates'))
            ->with(compact('dayvisitos'))
            ->with(compact('pievisitors'))
            ->with(compact('visitors'))
            ->with(compact('users'))
            ->with(compact('comments'))
            ->with(compact('countusers'))
            ->with(compact('monthvisits'))
            ->with(compact('lables'));
    }

    private function getLastMonths($month)
    {
        for ($i = 0 ; $i < $month ; $i++) {
            $labels[] = jdate(Carbon::now()->subMonths($i-1))->format('%B');
        }

        return array_reverse($labels);
    }

    private function CheckCount($count, $month)
    {
        for ($i = 0 ; $i < $month ; $i++) {
            $new[$i] = empty($count[$i]) ? 0 : $count[$i];
        }

        return ($new);
    }

}
