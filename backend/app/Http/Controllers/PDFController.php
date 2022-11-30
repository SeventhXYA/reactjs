<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
// use App\Models\User;
use App\Models\Longtermtarget;
use App\Models\Dailysd;
use App\Models\Dailybp;
use App\Models\Dailykl;
use App\Models\Dailyic;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function longtermPDF()
    {
        $longterm = Longtermtarget::whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();

        $data = [
            'title' => 'Long Term Target This Month',
            'date' => date('m/d/Y'),
            'longterm' => $longterm
        ];

        $pdf = PDF::loadView('admin.pdflongterm', $data)->setPaper('f4', 'landscape');
        // $pdf = PDF::loadView('admin.pdflongterm', $data);

        return $pdf->download('longterm.pdf');
    }

    public function dailysdNowPDF()
    {
        $dailysd = Dailysd::whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();
        // $dailysd = Dailysd::all();

        $data = [
            'title' => 'Daily Report Self-Development',
            'date' => date('m/d/Y'),
            'dailysd' => $dailysd
        ];

        $pdf = PDF::loadView('admin.pdfdailysd', $data);
        // $pdf = PDF::loadView('admin.pdflongterm', $data);

        return $pdf->download('dailysdToday.pdf');
    }

    public function dailysdPDF()
    {
        // $dailysd = Dailysd::whereBetween('created_at', [
        //     Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        // ])->get();
        $dailysd = Dailysd::all();

        $data = [
            'title' => 'Daily Report Self-Development',
            'date' => date('m/d/Y'),
            'dailysd' => $dailysd
        ];

        $pdf = PDF::loadView('admin.pdfdailysd', $data);
        // $pdf = PDF::loadView('admin.pdflongterm', $data);

        return $pdf->download('dailysd.pdf');
    }
    public function dailybpPDF()
    {
        // $dailybp = Dailybp::whereBetween('created_at', [
        //     Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        // ])->get();
        $dailybp = Dailybp::all();

        $data = [
            'title' => 'Daily Report Bisnis/Profit',
            'date' => date('m/d/Y'),
            'dailybp' => $dailybp
        ];

        $pdf = PDF::loadView('admin.pdfdailybp', $data)->setPaper('f4', 'landscape');
        // $pdf = PDF::loadView('admin.pdflongterm', $data);

        return $pdf->download('dailybp.pdf');
    }
    public function dailyicPDF()
    {
        // $dailyic = Dailyic::whereBetween('created_at', [
        //     Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        // ])->get();
        $dailyic = Dailyic::all();

        $data = [
            'title' => 'Daily Report Inovasi/Creativity',
            'date' => date('m/d/Y'),
            'dailyic' => $dailyic
        ];

        $pdf = PDF::loadView('admin.pdfdailyic', $data)->setPaper('f4', 'landscape');
        // $pdf = PDF::loadView('admin.pdfdailyic', $data);

        return $pdf->download('dailyic.pdf');
    }
    public function dailyklPDF()
    {
        // $dailykl = Dailykl::whereBetween('created_at', [
        //     Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        // ])->get();
        $dailykl = Dailykl::all();

        $data = [
            'title' => 'Daily Report Kelembagaan',
            'date' => date('m/d/Y'),
            'dailykl' => $dailykl
        ];

        $pdf = PDF::loadView('admin.pdfdailykl', $data)->setPaper('f4', 'landscape');
        // $pdf = PDF::loadView('admin.pdflongterm', $data);

        return $pdf->download('dailykl.pdf');
    }
}
