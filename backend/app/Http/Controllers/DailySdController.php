<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dailysd;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DailySdController extends Controller
{
    public function index()
    {
        $dailysd = Dailysd::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->whereBetween('created_at', [
            Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        ])->get();
        return view('sd.dailysd', [
            "title" => "Self-Development",
            "sesi" => "SELF-DEVELOPMENT"
        ], compact('dailysd'));
    }

    public function create()
    {
        $user = User::all();
        return view('sd.newdailysd', [
            "title" => "Daily Report Self-Development",
            "sesi" => "SELF-DEVELOPMENT"
        ], compact('user'));
    }
    public function store(Request $request)
    {
        // $data = Dailysd::create($request->all());
        // if ($request->hasFile('foto')) {
        //     $request->file('foto')->move('fotodailysd/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data - save();
        // }
        $validated_data = $request->validate([
            'plan' => 'required',
            'actual' => 'required',
            'progress' => 'required|numeric'
        ]);
        $dailysd = new Dailysd;
        $dailysd->plan = $validated_data['plan'];
        $dailysd->actual = $validated_data['actual'];
        $dailysd->progress = $validated_data['progress'];

        Auth::user()->dailysd()->save($dailysd);
        // Dailysd::create($request->except(['_token', 'submit']));
        return redirect('/dailysd');
    }

    public function history()
    {
        $dailysd = Dailysd::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('sd.historysd', [
            "title" => "History Report Self-Development",
            "sesi" => "REPORT SELF-DEVELOPMENT"
        ], compact('dailysd'));
    }
    public function viewadmin()
    {
        // $dailysd = Dailysd::whereBetween('created_at', [
        //     Carbon::now()->format('Y-m-d 00:00:00'), Carbon::now()->format('Y-m-d 23:59:59')
        // ])->get();
        $dailysd = Dailysd::all();
        return view('admin.viewsdadm', [
            "title" => "Daily Report Self-Development",
            "sesi" => "REPORT SELF-DEVELOPMENT"
        ], compact('dailysd'));
    }
}
