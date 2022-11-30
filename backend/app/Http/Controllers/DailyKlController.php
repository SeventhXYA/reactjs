<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dailykl;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DailyKlController extends Controller
{
    public function index()
    {
        $dailykl = Dailykl::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();
        return view('kl.dailykl', [
            "title" => "Kelembagaan",
            "sesi" => "KELEMBAGAAN"
        ], compact('dailykl'));
    }

    public function create()
    {
        $user = User::all();
        return view('kl.newdailykl', [
            "title" => "Daily Report Kelembagaan",
            "sesi" => "KELEMBAGAAN"
        ], compact('user'));
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'plan' => 'required',
            'actual' => 'required',
            'progress' => 'required|numeric'
        ]);
        $dailykl = new Dailykl;
        $dailykl->plan = $validated_data['plan'];
        $dailykl->actual = $validated_data['actual'];
        $dailykl->progress = $validated_data['progress'];

        Auth::user()->dailykl()->save($dailykl);
        return redirect('/dailykl');
    }
    public function history()
    {
        $dailykl = Dailykl::where('user_id', Auth::user()->id)->get();
        return view('kl.historykl', [
            "title" => "History Report Kelembagaan",
            "sesi" => "REPORT KELEMBAGAAN"
        ], compact('dailykl'));
    }
    public function viewadmin()
    {
        // $dailykl = Dailykl::whereBetween('created_at', [
        //     Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        // ])->get();
        $dailykl = Dailykl::all();
        return view('admin.viewkladm', [
            "title" => "Daily Report Kelembagaan",
            "sesi" => "REPORT KELEMBAGAAN"
        ], compact('dailykl'));
    }
}
