<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Weekly;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WeeklyController extends Controller
{
    public function index(Request $request)
    {
        $weekly_all = Weekly::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();

        if ($request->has("periode")) {
            $weekly = Weekly::where('id', $request->periode)->get();
        } else {
            $weekly = $weekly_all;
        }
        return view('weekly.weekly', [
            "title" => "Weekly Target",
        ], compact('weekly', 'weekly_all'));
    }

    public function create()
    {
        $user = User::all();
        return view('weekly.newweekly', [
            "title" => "Weekly Target",
            "sesi" => "WEEKLY TARGET"
        ], compact('user'));
    }
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'target_start' => 'required',
            'target_end' => 'required',
            'weeklysd' => 'required',
            'descweeklysd' => 'required',
            'weeklybp' => 'required',
            'descweeklybp' => 'required',
            'weeklykl' => 'required',
            'descweeklykl' => 'required',
            'weeklyic' => 'required',
            'descweeklyic' => 'required',
        ]);

        $weekly = new Weekly();
        $weekly->target_start = $validated_data['target_start'];
        $weekly->target_end = $validated_data['target_end'];
        $weekly->weeklysd = $validated_data['weeklysd'];
        $weekly->descweeklysd = $validated_data['descweeklysd'];
        $weekly->weeklybp = $validated_data['weeklybp'];
        $weekly->descweeklybp = $validated_data['descweeklybp'];
        $weekly->weeklykl = $validated_data['weeklykl'];
        $weekly->descweeklykl = $validated_data['descweeklykl'];
        $weekly->weeklyic = $validated_data['weeklyic'];
        $weekly->descweeklyic = $validated_data['descweeklyic'];

        Auth::user()->weekly()->save($weekly);

        return redirect('/weekly');
    }
    public function history(Request $request)
    {
        $weekly_all = Weekly::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();

        if ($request->has("periode")) {
            $weekly = Weekly::where('id', $request->periode)->get();
        } else {
            $weekly = $weekly_all;
        }

        return view('weekly.historyweekly', [
            "title" => "History Weekly Plan",
        ], compact('weekly', 'weekly_all'));
    }
}
